		<?php
		// Template modification Hook
		do_action( 'hoot_template_main_wrapper_end' );
		?>
		</div><!-- #main -->

		<?php get_template_part( 'template-parts/footer', 'subfooter' ); // Loads the template-parts/footer-subfooter.php template. ?>

		<?php get_template_part( 'template-parts/footer', 'footer' ); // Loads the hoot-ubix-premium-child/footer-footer.php template. ?>

		<?php get_template_part( 'template-parts/footer', 'postfooter' ); // Loads the template-parts/footer-postfooter.php template. ?>

	</div><!-- #page-wrapper -->
	<!-- Live Chat-->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  
	ga('create', 'UA-25148112-6', 'auto');
	ga('send', 'pageview');
  
  </script>
  
  
  <!--VISISTAT SNIPPET//-->
  <script type="text/javascript">
  //<![CDATA[
  var DID=229936;
  var pcheck=(window.location.protocol == "https:") ? "https://sniff.visistat.com/live.js":"http://stats.visistat.com/live.js";
  document.writeln('<scr'+'ipt src="'+pcheck+'" type="text\/javascript"><\/scr'+'ipt>');
  //]]>
  </script>
  <!--VISISTAT SNIPPET//-->
  
  <!-- Need Help corner block //
  <div style="
  position: fixed;
  bottom:5px;
  right:5px;
  display:block;
  z-index:1000;
  ">
  <img src="http://www.tshirtchampions.com/images/callforhelpfooter.png" alt="Call us! We'd be happy to help!" />
  </div>-->
  <!-- BEGIN LivePerson Monitor. -->
  <script type="text/javascript"> window.lpTag=window.lpTag||{};if(typeof window.lpTag._tagCount==='undefined'){window.lpTag={site:'66598380'||'',section:lpTag.section||'',autoStart:lpTag.autoStart===false?false:true,ovr:lpTag.ovr||{},_v:'1.5.1',_tagCount:1,protocol:location.protocol,events:{bind:function(app,ev,fn){lpTag.defer(function(){lpTag.events.bind(app,ev,fn);},0);},trigger:function(app,ev,json){lpTag.defer(function(){lpTag.events.trigger(app,ev,json);},1);}},defer:function(fn,fnType){if(fnType==0){this._defB=this._defB||[];this._defB.push(fn);}else if(fnType==1){this._defT=this._defT||[];this._defT.push(fn);}else{this._defL=this._defL||[];this._defL.push(fn);}},load:function(src,chr,id){var t=this;setTimeout(function(){t._load(src,chr,id);},0);},_load:function(src,chr,id){var url=src;if(!src){url=this.protocol+'//'+((this.ovr&&this.ovr.domain)?this.ovr.domain:'lptag.liveperson.net')+'/tag/tag.js?site='+this.site;}var s=document.createElement('script');s.setAttribute('charset',chr?chr:'UTF-8');if(id){s.setAttribute('id',id);}s.setAttribute('src',url);document.getElementsByTagName('head').item(0).appendChild(s);},init:function(){this._timing=this._timing||{};this._timing.start=(new Date()).getTime();var that=this;if(window.attachEvent){window.attachEvent('onload',function(){that._domReady('domReady');});}else{window.addEventListener('DOMContentLoaded',function(){that._domReady('contReady');},false);window.addEventListener('load',function(){that._domReady('domReady');},false);}if(typeof(window._lptStop)=='undefined'){this.load();}},start:function(){this.autoStart=true;},_domReady:function(n){if(!this.isDom){this.isDom=true;this.events.trigger('LPT','DOM_READY',{t:n});}this._timing[n]=(new Date()).getTime();},vars:lpTag.vars||[],dbs:lpTag.dbs||[],ctn:lpTag.ctn||[],sdes:lpTag.sdes||[],ev:lpTag.ev||[]};lpTag.init();}else{window.lpTag._tagCount+=1;} </script>
  <!-- END LivePerson Monitor. -->
  
  <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"0e2953ef44","applicationID":"373286","transactionName":"ZlMEYUNUCxFWAhdaVl8ZM0dYGgwMUwQbHUlZRg==","queueTime":0,"applicationTime":53,"atts":"ShQHFwtOGB8=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-768.min.js"}</script>
	<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

</body>
</html>