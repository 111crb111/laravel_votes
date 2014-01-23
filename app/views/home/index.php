<!doctype html>
<html lang="ru">
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
		.input-append{
			display: block !important;
		}
		.remove_variant{
			margin: 0px 5px;
		}      



		/*footer fix*/
		html, body {
			height: 100%;
		/* The html and body elements cannot have any padding or margin. */
		}

		/* Wrapper for page content to push down footer */
		#wrap {
			min-height: 100%;
			height: auto !important;
			height: 100%;
		/* Negative indent footer by it's height */
			margin: 0 auto -60px;
		}

		/* Set the fixed height of the footer here */
		#push, footer {
			height: 60px;
		}
		footer {
			background-color: #f5f5f5;
		}
		/* Lastly, apply responsive CSS fixes as necessary */
		@media (max-width: 767px) {
			footer {
				margin-left: -20px;
				margin-right: -20px;
				padding-left: 20px;
				padding-right: 20px;
			}
		}
	</style>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
	<div id="wrap">

		<!-- Fixed navbar -->
		<header id="menu" class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="#">Имя проекта</a>
					<div class="nav-collapse collapse">
						<a href="#addvote" class="btn">Add vote</a>
					</div>
				</div>
			</div>
		</header>

		<!-- Begin page content -->
		<div id="page_content" class="container">
			<div id="index_content">
				<div class="page-header">
					<h1>Голосования</h1>
				</div>
				<table id="votes_table" class="table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Название</th>
							<th>Вопрос</th>
							<th>кнопка</th>
						</tr>
					</thead>
				</table>
			</div>
			<div id="push"></div>
		</div>
		
	</div>
	<footer>
		<div class="container">
			<br/>
			<p class="pull-right muted credit">C.R.B. &copy; 2014</p>
		</div>
	</footer>

	<script type="text/template" id="votes_tr_tpl">
		<td><%= id %></td>
		<td><%= name %></td>
		<td><%= question %></td>
		<td><a href="#" role="button" class="btn">Открыть</a></td>
	</script>

	<script type="text/template" id="addvote_tpl">
		<div id="add_vote" class="control-group">
			<div class="header">
				<h1>Создать голосование</h1>
			</div>
			<div class="body">
				<form id="add_vote_form" class="form-vertical">
					<div>
						<input type="text" id="name" placeholder="Название">
					</div>
					<div>
						<input type="text" id="question" placeholder="Вопрос">
					</div>
					<div id="variants">
						<div id="add_variant" class="btn">Добавить вариант</div><br>
						<div class="input-append">
							<div><input type="text" class="variant" placeholder="Вариант 1"><button class="btn hide remove_variant"><span class="icon-remove-sign"></span></button></div>
						</div>
						<div class="input-append">
							<div><input type="text" class="variant" placeholder="Вариант 2"><button class="btn hide remove_variant"><span class="icon-remove-sign"></span></button></div>
						</div>
						<!-- ЛУЫЧШЕ СДЕЛАТЬ ШАБЛОНАМЫ -->
						<div class="alert alert-error hide" id="add_vote_error">
						    <a class="close">×</a>
							<p><strong>Ошибка!</strong> Все поля должны быть заполнены!</p>
						</div>
						<div class="alert alert-success hide" id="add_vote_success">
						    <a class="close">×</a>
							<p><strong>Поздравляем!</strong> Голосование успешно создано!</p>
						</div>
					</div>
					<div class="">
						<input type="submit" class="btn btn-primary btn-large" value="Добавить голосование">
					</div>
				</form>
			</div>
		</div>
	</script>
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
