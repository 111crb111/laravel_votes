<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Votes!</title>
	<style>
		#add_vote{
			text-align: center;
		}
		#add_variant{
			margin: 10px;
		}
		.remove_variant{
			margin: 0px 5px;
		}
	</style>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
	<div id="menu" class="navbar navbar-fixed-top">

	    <div class="navbar-inner">
			<div class="container">
				<a href="#add_vote" role="button" class="btn" data-toggle="modal">Add vote</a>
			</div>
		</div>
	</div>




	<div id="add_vote" class="modal hide fade">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h1>Создать голосование</h1>
		</div>
		<div class="modal-body">
			<form id="add_vote_form" class="form-actions">
				<div>
					<label>Название</label>
					<input type="text" id="name">
				</div>
				<div>
					<label>Вопрос</label>
					<input type="text" id="question">
				</div>
				<div id="variants">
					<label>Варианты</label>
					<div id="add_variant" class="btn">Добавить вариант</div>
					<div><input type="text" class="variant"><span class="remove_variant icon-remove-circle"></span></div>
					<div><input type="text" class="variant"><span class="remove_variant icon-remove-sign"></span></div>
				</div>
				<div>
					<input type="submit" class="btn btn-primary btn-large" value="Добавить голосование">
				</div>
			</form>
		</div>
	</div>


	<div class="pull-right muted">
		<strong>C.R.B. &copy; 2011</strong>
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/underscore.js"></script>
	<script type="text/javascript" src="js/backbone.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/models.js"></script>
	<script type="text/javascript" src="js/collections.js"></script>
	<script type="text/javascript" src="js/views.js"></script>
	<script type="text/javascript" src="js/router.js"></script>
	<script type="text/javascript" src="js/application.js"></script>
</body>
</html>
