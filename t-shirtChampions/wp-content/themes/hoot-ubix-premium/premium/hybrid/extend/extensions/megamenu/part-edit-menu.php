<?php
global $hybridextend_megamenu;
foreach ( $hybridextend_megamenu->get_options() as $key => $option ) {

	$id = sanitize_html_class( $key );
	$toponly = ( isset( $option['top_level'] ) && true === $option['top_level'] ) ? true : false;
	$style = ( $toponly && 0 !== $depth ) ? ' style="display:none;" ' : '';
	$class = ( $toponly ) ? ' hybridextend_top_level_only ' : '';

	switch ( $option['type'] ) {

		case 'text':
			$class .= ( isset( $option['class'] ) && 'mini' == $option['class'] ) ? 'description-thin' : 'description-wide';
			?>
			<p class="field-<?php echo $id; ?> description <?php echo $class ?>" <?php echo $style; ?>>
				<label for="edit-menu-item-<?php echo $id . '-' . $item_id; ?>">
					<?php echo $option['name']; ?><br />
					<input type="text" id="edit-menu-item-<?php echo $id . '-' . $item_id; ?>" class="widefat code edit-menu-item-<?php echo $id; ?>" name="menu-item-<?php echo $id . '[' . $item_id . ']'; ?>" value="<?php echo esc_attr( $item->hybridextend_megamenu[ $key ] ); ?>" />
				</label>
			</p>
		<?php break;

		case 'checkbox': ?>
			<p class="field-<?php echo $id; ?> description description-wide <?php echo $class ?>" <?php echo $style; ?>>
				<label for="edit-menu-item-<?php echo $id . '-' . $item_id; ?>">
					<input type="checkbox" id="edit-menu-item-<?php echo $id . '-' . $item_id; ?>" value="1" name="menu-item-<?php echo $id . '[' . $item_id . ']'; ?>" <?php checked( $item->hybridextend_megamenu[ $key ], '1' ); ?>>
					<?php echo $option['name']; ?>
				</label>
			</p>
		<?php break;

		case 'textarea': ?>
			<p class="field-<?php echo $id; ?> description description-wide <?php echo $class ?>" <?php echo $style; ?>>
				<label for="edit-menu-item-<?php echo $id . '-' . $item_id; ?>">
					<?php echo $option['name']; ?><br />
					<textarea id="edit-menu-item-<?php echo $id . '-' . $item_id; ?>" class="widefat edit-menu-item-<?php echo $id; ?>" rows="3" cols="20" name="menu-item-<?php echo $id . '[' . $item_id . ']'; ?>"><?php echo esc_html( $item->hybridextend_megamenu[ $key ] ); // textarea_escaped ?></textarea>
					<?php if ( isset( $option['desc'] ) ) : ?>
						<span class="description"><?php echo $option['desc'] ?></span>
					<?php endif; ?>
				</label>
			</p>
		<?php break;

		case 'select': ?>
			<p class="field-<?php echo $id; ?> description description-wide <?php echo $class ?>" <?php echo $style; ?>>
				<label for="edit-menu-item-<?php echo $id . '-' . $item_id; ?>">
					<?php echo $option['name']; ?><br />
					<select id="edit-menu-item-<?php echo $id . '-' . $item_id; ?>" class="widefat edit-menu-item-<?php echo $id; ?>" name="menu-item-<?php echo $id . '[' . $item_id . ']'; ?>">
						<?php foreach ( $option['options'] as $opvalue => $opname ) { ?>
							<option value="<?php echo esc_attr( $opvalue ); ?>" <?php selected( $item->hybridextend_megamenu[ $key ], $opvalue ); ?>><?php echo esc_html( $opname ); ?></option>
						<?php } ?>
					</select>
				</label>
			</p>
		<?php break;

		case 'icon': ?>
			<p class="field-<?php echo $id; ?> description description-wide <?php echo $class ?>" <?php echo $style; ?>>
				<label for="edit-menu-item-<?php echo $id . '-' . $item_id; ?>">
					<?php echo $option['name']; ?> <?php printf( __( '%1$s(Reference Table)%2$s', 'hybrid-core' ), '<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">', '</a>' ) ?><br />
					<select id="edit-menu-item-<?php echo $id . '-' . $item_id; ?>" class="widefat edit-menu-item-<?php echo $id; ?>" name="menu-item-<?php echo $id . '[' . $item_id . ']'; ?>">
						<option value="" <?php selected( $item->hybridextend_megamenu[ $key ], '' ); ?>><?php _e( 'None', 'hybrid-core' ) ?></option>

						<?php // @todo create HootOptions icons UI
						$section_icons = hybridextend_enum_icons('icons');
						foreach ( hybridextend_enum_icons('sections') as $s_key => $s_title ) { ?>
							<optgroup label="<?php echo esc_attr( $s_title ) ?>"> <?php
								foreach ( $section_icons[$s_key] as $i_key => $i_class ) { ?>
									<option value="<?php echo esc_attr( $i_class ); ?>" <?php selected( $item->hybridextend_megamenu[ $key ], $i_class ); ?>><?php echo esc_html( $i_class ); ?></option><?php
								} ?>
							</optgroup><?php
						} ?>

					</select>
				</label>
			</p>
		<?php break;

	}

}
?>