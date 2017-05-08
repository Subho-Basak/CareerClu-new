<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<script src="js/jquery.min.js"></script>

<style>
html, body {
	min-height: 100% !important;
	min-width: 100% !important;
}

input {
	margin: 3%;
	width: 30%;
	height: 5%;
}

.chart-container {
	width: 20%;
	margin: 5% auto;
	height: auto;
	padding: 2%;
	background: #ddd;
}

.chart-main {
	width: 100% !important;
	height: auto;
}
</style>

</head>
<body>
	<input type="text" />
	<input type="text" />
	<input type="text" />
	<input type="text" />
	<input type="text" />

	<button id="inputData">Create Chart</button>


	<div class="chart-container">
		<div class="chart-main"></div>

	</div>


	<!-- Script start here -->
	<script>
		$(document).ready(function() {
			$('#inputData').click(function() {

				var arr = new Array(5);
				var newArr = new Array(5);

				var i = 0;
				$("input").each(function() {
					arr[i] = parseInt($(this).val());
					i++;
				});

				processData(arr, newArr);
			});

		});

		function processData(arr, newArr) {
			var sum = 0;
			for (var j = 0; j < 5; j++) {
				sum = sum + arr[j];

			}

			for (var i = 0; i < 5; i++) {
				newArr[i] = ((arr[i] / sum) * 100);

				$('.chart-main').append(
						'<div style="width:' + newArr[i]
								+ '%;background:#aaa;height:40px;"></div><br>');
			}
			$('.chart-container').css({
				'transform' : 'rotateZ(-90deg)'
			});

		}
	</script>
</body>
</html>