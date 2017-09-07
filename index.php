<!DOCTYPE html>
<html>
	<head>
		<title>JavaScript Tutorial</title>
		<style type="text/css">
			#b {
				width: 600px;
				height: 300px;
				margin: 0 auto;
				overflow: hidden;
				border: 20px solid red;
			}

			#c {
				width: 50px;
				height: 50px;
				background:green;
				margin: 0 auto;
				border-radius: 50%;
			}
		</style>
	</head>
	<body>
		<div id = "b">
			<div id = "c"></div>
		</div>

		<script type="text/javascript">

			var z = 0;
			var a = 0;
			var outer = document.getElementById( 'b' );
			var inner = document.getElementById( 'c' );
			var down = true;
			var right = true;
			var height = outer.clientHeight - inner.clientHeight;
			var width = outer.clientWidth - inner.clientWidth;

			setInterval( function() {
				if ( down ) {
				 z++;
				}
				else {
				 z--;
				}
				
				if ( z == height ) {
					down = false;
				}
				else if ( z == 0 ) {
					down = true;
				}

				if ( right ) {
					a++;
				}
				else {
					a--;
				}

				if ( a == width ) {
					right = false;
				}
				else if ( a == 0 ){
					right = true;
				}
				inner.style.marginLeft = a + 'px';
				inner.style.marginTop = z + 'px';
			}, 1 );

		</script>

	</body>
</html>