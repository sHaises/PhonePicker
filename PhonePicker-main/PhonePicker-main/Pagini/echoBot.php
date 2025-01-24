<?php
	  echo 
		'<script type="text/javascript">
        (function (d, s, id) {
          var js,
            el = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) {
            return;
          }
          js = d.createElement(s);
          js.async = true;
          js.src = "https://s3.ap-south-1.amazonaws.com/conferbot.defaults/dist/v1/widget.min.js";
          js.id = id;
          js.charset = "UTF-8";
          el.parentNode.insertBefore(js, el);
          // Initializes the widget when the script is ready
          js.onload = function () {
              var w = window.ConferbotWidget("643fe1de7792f506110d95c9", "live_chat");
          };
        })(document, "script", "conferbot-js");
      </script>'
?>