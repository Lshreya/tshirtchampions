<?php
/**
 * Auto Theme Updater
 * This file is loaded at 'after_setup_theme' hook with 14 priority.
 *
 * @package    HybridExtend
 * @subpackage HybridHoot
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Theme Updater class. This wraps everything up nicely.
 *
 * @since 2.0.0
 */
final class HybridExtend_Theme_Updater {

	protected $args = array();

	public function __construct( $args = array() ) {

		global $hybridextend_theme;

		$this->args = wp_parse_args( $args, array(
			'remote_api_url' => 'https://wphoot.com',
			'request_data' => array(),
			'theme_slug' => str_replace( '_', '-', HYBRIDEXTEND_THEMESLUG ), // get_template() = directory name
			'item_name' => HYBRIDEXTEND_TEMPLATE,
			'license' => '', // Redundant
			'version' => HYBRIDEXTEND_THEME_VERSION,
			'author' => $hybridextend_theme->get( 'Author' ),
			'response_key' => str_replace( '_', '-', HYBRIDEXTEND_THEMESLUG ) . '-update-response',
		) );

		add_filter( 'site_transient_update_themes', array( &$this, 'theme_update_transient' ) );
		add_filter( 'delete_site_transient_update_themes', array( &$this, 'delete_theme_update_transient' ) );
		add_action( 'load-update-core.php', array( &$this, 'delete_theme_update_transient' ) );
		add_action( 'load-themes.php', array( &$this, 'delete_theme_update_transient' ) );
		add_action( 'load-themes.php', array( &$this, 'load_themes_screen' ) );

	}

	function load_themes_screen() {
		add_thickbox();
		add_action( 'admin_notices', array( &$this, 'update_nag' ) );
	}

	function update_nag() {

		$api_response = get_transient( $this->args['response_key'] );

		if ( false === $api_response ) {
			return;
		}

		$update_url = wp_nonce_url( 'update.php?action=upgrade-theme&amp;theme=' . urlencode( $this->args['theme_slug'] ), 'upgrade-theme_' . $this->args['theme_slug'] );
		$update_onclick = ' onclick="if ( confirm(\'' . esc_js( __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'hybrid-core' ) ) . '\') ) {return true;}return false;"';

		if ( version_compare( $this->args['version'], $api_response->new_version, '<' ) ) {

			echo '<div id="update-nag">';
			printf(
				__('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4$s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'hybrid-core' ),
				HYBRIDEXTEND_TEMPLATE,
				$api_response->new_version,
				'#TB_inline?width=640&amp;inlineId=' . $this->args['theme_slug'] . '_changelog',
				HYBRIDEXTEND_TEMPLATE,
				$update_url,
				''//$update_onclick
			);
			echo '</div>';
			echo '<div id="' . $this->args['theme_slug'] . '_' . 'changelog" style="display:none;">';
			echo wpautop( $api_response->sections['changelog'] );
			echo '</div>';
		}
	}

	function theme_update_transient( $value ) {
		$update_data = $this->check_for_update();
		if ( $update_data ) {
			$value->response[ $this->args['theme_slug'] ] = $update_data;
		}
		return $value;
	}

	function delete_theme_update_transient() {
		delete_transient( $this->args['response_key'] );
	}

	function check_for_update() {

		$update_data = get_transient( $this->args['response_key'] );

		if ( false === $update_data ) {
			$failed = false;

			$api_params = array(
				'edd_action' 	=> 'get_version',
				'license' 		=> $this->args['license'],
				'name' 			=> $this->args['item_name'],
				'slug' 			=> $this->args['theme_slug'],
				'author'		=> $this->args['author']
			);

			$response = wp_remote_post( $this->args['remote_api_url'], array( 'timeout' => 15, 'body' => $api_params ) );

			// Make sure the response was successful
			if ( is_wp_error( $response ) || 200 != wp_remote_retrieve_response_code( $response ) ) {
				$failed = true;
			}

			$update_data = json_decode( wp_remote_retrieve_body( $response ) );

			if ( ! is_object( $update_data ) ) {
				$failed = true;
			}

			// If the response failed, try again in 30 minutes
			if ( $failed ) {
				$data = new stdClass;
				$data->new_version = $this->args['version'];
				set_transient( $this->args['response_key'], $data, strtotime( '+30 minutes' ) );
				return false;
			}

			// If the status is 'ok', return the update arguments
			if ( ! $failed ) {
				$update_data->sections = maybe_unserialize( $update_data->sections );
				set_transient( $this->args['response_key'], $update_data, strtotime( '+12 hours' ) );
			}
		}

		if ( version_compare( $this->args['version'], $update_data->new_version, '>=' ) ) {
			return false;
		}

		return (array) $update_data;
	}

}