<!doctype html>
<html>
	<head>
		<script src="public/js/project.js"></script>
		<script>febox.init()</script>

		<link rel="stylesheet" href="/public/css/style.css?ee=<?= rand(0, 999) ?>">
	</head>
	<body>
		<header>
			<div class="header-head">
				<div class="header-head-wrapper">
					<div class="header-head-wrapper-logo">
						<div class="header-head-wrapper-logo-img"></div>
						<div class="header-head-wrapper-logo-data">
							<h1>
								<strong>Ориент</strong>
								<span>Мебельные решения</span>
							</h1>
						</div>
					</div>
					<div class="header-head-wrapper-nav">
						<a href="#">О компании</a>
						<a href="#">Кухни</a>
						<a href="#">Шкафы-купе</a>
						<a href="#">Материалы</a>
						<a href="#">Оплата и доставка</a>
						<a href="#">Контакты</a>
					</div>
					<div class="header-head-wrapper-contact">
						<div class="header-head-wrapper-contact-phone">8 095 548 45 54</div>
						<div class="header-head-wrapper-contact-social">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;" xml:space="preserve"><g><path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752   c17.455,0,31.656,14.201,31.656,31.655V122.407z" fill="#FFFFFF"/><path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" fill="#FFFFFF"/><path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78   C135.661,29.421,132.821,28.251,129.921,28.251z" fill="#FFFFFF"/></g></svg>
							<strong>Мы в instagram</strong>
						</div>
					</div>
				</div>
			</div>
			<div class="header-slider">
				<div class="peppermint peppermint-inactive" id="peppermint">
					<figure style="background-image: url('/public/img/slider.jpg')">
						<div class="peppermint-data">
							<h2>Благородные породы</h2>
							<div class="peppermint-data-border">
								<span>»</span>
								<span>«</span>
							</div>
							<p>Мы изготавливаем мебель из массива натурального дерева: сосны, кедра, ясеня и дуба. Мы работаем в Москве, в Московской области и завоевали признание тысяч клиентов</p>
						</div>
					</figure>
					<figure style="background-image: url('/public/img/slider.jpg')"></figure>
				</div>

				<script src="public/js/peppermint.js"></script>
				<script>
					var slider = Peppermint(document.getElementById('peppermint'));
				</script>
			</div>
		</header>
		<div class="home-form">
			<div class="home-form-wrapper">
				<strong class="home-form-head">Заказав бесплатный расчет стоимости, <br>вы получите:</strong>
				<div class="home-form-wrapper-tabs">
					<div class="home-form-wrapper-tabs-item">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px">
<g>
	<g>
		<path d="M439.449,0H72.551c-5.633,0-10.199,4.567-10.199,10.199v491.602c0,5.632,4.566,10.199,10.199,10.199h366.898    c5.632,0,10.199-4.567,10.199-10.199V10.199C449.648,4.567,445.081,0,439.449,0z M429.25,491.602H82.75V20.398h346.5V491.602z" fill="#5e5e5e"/>
	</g>
</g>
							<g>
								<g>
									<path d="M399.105,38.757h-286.21c-5.633,0-10.199,4.567-10.199,10.199v83.633c0,5.632,4.566,10.199,10.199,10.199h286.21    c5.633,0,10.199-4.567,10.199-10.199V48.956C409.304,43.324,404.737,38.757,399.105,38.757z M388.906,122.39H123.094V59.155    h265.812V122.39z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M163.753,163.187h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199v-52.718C173.953,167.754,169.386,163.187,163.753,163.187z M153.554,215.905h-30.46v-32.319    h30.46V215.905z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M241.657,163.187h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199v-52.718C251.856,167.754,247.29,163.187,241.657,163.187z M231.458,215.905h-30.46v-32.319    h30.46V215.905z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M319.992,163.187h-50.858c-5.632,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.567,10.199,10.199,10.199h50.858    c5.632,0,10.199-4.566,10.199-10.199v-52.718C330.191,167.754,325.624,163.187,319.992,163.187z M309.793,215.905h-30.46v-32.319    h30.46V215.905z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M163.753,241.636h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199v-52.718C173.953,246.204,169.386,241.636,163.753,241.636z M153.554,294.354h-30.46v-32.319    h30.46V294.354z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M241.657,241.636h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199v-52.718C251.856,246.204,247.29,241.636,241.657,241.636z M231.458,294.354h-30.46v-32.319    h30.46V294.354z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M319.992,241.636h-50.858c-5.632,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.567,10.199,10.199,10.199h50.858    c5.632,0,10.199-4.566,10.199-10.199v-52.718C330.191,246.204,325.624,241.636,319.992,241.636z M309.793,294.354h-30.46v-32.319    h30.46V294.354z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M163.753,321.421h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199V331.62C173.953,325.988,169.386,321.421,163.753,321.421z M153.554,374.138h-30.46v-32.319    h30.46V374.138z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M241.657,321.421h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199V331.62C251.856,325.988,247.29,321.421,241.657,321.421z M231.458,374.138h-30.46v-32.319    h30.46V374.138z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M319.992,321.421h-50.858c-5.632,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.567,10.199,10.199,10.199h50.858    c5.632,0,10.199-4.566,10.199-10.199V331.62C330.191,325.988,325.624,321.421,319.992,321.421z M309.793,374.138h-30.46v-32.319    h30.46V374.138z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M163.753,401.147h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.567,10.199-10.199v-52.718C173.953,405.714,169.386,401.147,163.753,401.147z M153.554,453.865h-30.46v-32.319    h30.46V453.865z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M241.657,401.147h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.567,10.199-10.199v-52.718C251.856,405.714,247.29,401.147,241.657,401.147z M231.458,453.865h-30.46v-32.319    h30.46V453.865z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M319.992,401.147h-50.858c-5.632,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.567,10.199,10.199,10.199h50.858    c5.632,0,10.199-4.567,10.199-10.199v-52.718C330.191,405.714,325.624,401.147,319.992,401.147z M309.793,453.865h-30.46v-32.319    h30.46V453.865z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M398.776,163.187h-50.858c-5.632,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.567,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199v-52.718C408.975,167.754,404.408,163.187,398.776,163.187z M388.576,215.905h-30.46v-32.319    h30.46V215.905z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M398.776,241.636h-50.858c-5.632,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.567,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199v-52.718C408.975,246.204,404.408,241.636,398.776,241.636z M388.576,294.354h-30.46v-32.319    h30.46V294.354z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M398.776,321.275h-50.858c-5.632,0-10.199,4.567-10.199,10.199v132.59c0,5.632,4.567,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.567,10.199-10.199v-132.59C408.975,325.842,404.408,321.275,398.776,321.275z M388.576,453.865h-30.46V341.673    h30.46V453.865z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M236.622,91.793h-91.793c-5.633,0-10.199,4.567-10.199,10.199c0,5.632,4.566,10.199,10.199,10.199h91.793    c5.633,0,10.199-4.567,10.199-10.199C246.821,96.36,242.255,91.793,236.622,91.793z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M276.398,91.793h-8.159c-5.632,0-10.199,4.567-10.199,10.199c0,5.632,4.567,10.199,10.199,10.199h8.159    c5.632,0,10.199-4.567,10.199-10.199C286.598,96.36,282.03,91.793,276.398,91.793z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
</svg>
						<strong>Оптимальный расчет стоимости</strong>
					</div>
					<div class="home-form-wrapper-tabs-item">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve" width="512px" height="512px">
<g>
	<path d="M46,33.5c-6.617,0-12,5.383-12,12s5.383,12,12,12s12-5.383,12-12S52.617,33.5,46,33.5z M46,55.5c-5.514,0-10-4.486-10-10   s4.486-10,10-10s10,4.486,10,10S51.514,55.5,46,55.5z" fill="#5e5e5e"/>
	<path d="M52,44.5h-5v-5c0-0.553-0.447-1-1-1s-1,0.447-1,1v6c0,0.553,0.447,1,1,1h6c0.553,0,1-0.447,1-1S52.553,44.5,52,44.5z" fill="#5e5e5e"/>
	<polygon points="18.058,40.578 18.058,17.5 16.058,17.5 11,20.5 11,22.5 16.058,19.5 16.058,40.578  " fill="#5e5e5e"/>
	<path d="M36.058,32.184v-7.345c0-2.042-0.712-3.773-2.134-5.196c-1.423-1.423-3.149-2.134-5.18-2.134s-3.757,0.711-5.179,2.134   c-1.423,1.423-2.134,3.148-2.134,5.179s0.711,3.757,2.134,5.18c1.422,1.423,3.183,2.134,5.282,2.134s3.871-0.78,5.316-2.341v2.148   c0,2.157-0.631,3.791-1.893,4.904c-1.262,1.112-2.753,1.669-4.474,1.669h-0.74v1.893h0.603c1.537,0,2.879-0.27,4.026-0.809   s2.019-1.233,2.615-2.082C35.473,35.866,36.058,34.088,36.058,32.184z M32.599,28.676c-1.044,1.044-2.323,1.565-3.837,1.565   c-1.515,0-2.8-0.521-3.854-1.565c-1.056-1.044-1.583-2.323-1.583-3.837c0-1.515,0.527-2.799,1.583-3.854   c1.055-1.055,2.334-1.583,3.837-1.583s2.782,0.511,3.837,1.531c1.056,1.021,1.583,2.306,1.583,3.854S33.643,27.632,32.599,28.676z" fill="#5e5e5e"/>
	<path d="M28,45.5H2v-33h15h2h14h2h14v16c0,0.553,0.447,1,1,1s1-0.447,1-1v-16v-1v-11H35h-2H19h-2H0v11v1v34c0,0.553,0.447,1,1,1h27   c0.553,0,1-0.447,1-1S28.553,45.5,28,45.5z M35,2.5h14v8H35V2.5z M19,2.5h14v8H19V2.5z M2,2.5h15v8H2V2.5z" fill="#5e5e5e"/>
</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
</svg>
						<strong>Расчет сроков <br>изготовления и доставки</strong>
					</div>
					<div class="home-form-wrapper-tabs-item">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 59.911 59.911" style="enable-background:new 0 0 59.911 59.911;" xml:space="preserve" width="512px" height="512px">
<path d="M59.605,23.399c-0.241-0.281-0.593-0.443-0.965-0.443H56V8.723c0-0.975-0.793-1.768-1.768-1.768H23.566l-2.485-4.141  c-0.317-0.53-0.898-0.859-1.516-0.859H5.767C4.793,1.956,4,2.749,4,3.723v19.232H1.27c-0.37,0-0.721,0.161-0.962,0.441  c-0.242,0.28-0.35,0.651-0.294,1.02l4.917,32.454c0.091,0.618,0.631,1.085,1.257,1.085h47.534c0.626,0,1.166-0.467,1.256-1.081  l4.918-32.454C59.953,24.053,59.847,23.681,59.605,23.399z M6,3.956h13.434l2.485,4.141c0.317,0.53,0.898,0.859,1.516,0.859H54v14  h-1v-4h-1v-3h-1v-3H9v3H8v3H7v4H6V3.956z M9,20.956h42v2H9V20.956z M10,17.956h40v1H10V17.956z M49,15.956H11v-1h38V15.956z   M53.095,55.956H6.815l-4.696-31H4h3h46h3h1.792L53.095,55.956z" fill="#5e5e5e"/>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
</svg>
						<strong>Подбор материалов от дизайнеров</strong>
					</div>
					<div class="home-form-wrapper-tabs-item">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="512px" height="512px">
							<g>
								<path d="m393.2,105.9c9.3-10 15.1-23.6 15.1-38.6 0-31.3-25-56.3-55.3-56.3-23,0-76,34.4-97.2,65.3-21.9-30.9-74.7-64.3-96.8-64.3-30.2,0-55.3,25-55.3,56.3 0,14.5 5.4,27.6 14.1,37.5h-106.8v134.5h29.2v260.7h153.3 125.1 153.3v-260.6h29.1v-134.5h-107.8zm-40.2-74c18.8-7.10543e-15 34.4,15.6 34.4,36.5 0,17.6-12.3,32.7-28.2,35.9h-84.6c-5.4-1.6-7.1-3.5-7.1-4.6 0-17.8 62.5-67.8 85.5-67.8zm-194-0c21.9,0 85.5,50 85.5,67.8 0,1.6-3.7,3.4-6.4,4.6h-85.2c-15.9-3.2-28.2-18.3-28.2-35.9-0.1-19.9 15.6-36.5 34.3-36.5zm34.4,448.2h-132.4v-239.7h132.4v239.7zm0-259.5h-161.5v-93.8h161.6v93.8zm104.2,259.5h-83.4v-353.4h83.4v353.4zm153.3,0h-132.4v-239.7h132.4v239.7zm29.1-259.5h-161.5v-93.8h161.6v93.8z" fill="#5e5e5e"/>
							</g>
						</svg>
						<strong>Смеситель или мойка в подарок</strong>
					</div>
				</div>
				<div class="home-form-wrapper-form">
					<div class="home-form-wrapper-form-data">
						<h3>Получите расчет стомости кухни <br>за 15 минут</h3>

						<div class="home-form-wrapper-form-data-form">
							<span>Введите ваше имя</span>
							<input type="text" placeholder="Ваше имя">

							<span>Введите ваш телефон</span>
							<input type="text" placeholder="+7 (___) ___-__-__">

							<button>Получить расчет стоимости</button>
						</div>
					</div>
					<div class="home-form-wrapper-form-img">
						<div class="home-form-wrapper-form-img-img" style="background-image: url('/public/img/podarok.jpg')">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="512px" height="512px"><g><path d="m393.2,105.9c9.3-10 15.1-23.6 15.1-38.6 0-31.3-25-56.3-55.3-56.3-23,0-76,34.4-97.2,65.3-21.9-30.9-74.7-64.3-96.8-64.3-30.2,0-55.3,25-55.3,56.3 0,14.5 5.4,27.6 14.1,37.5h-106.8v134.5h29.2v260.7h153.3 125.1 153.3v-260.6h29.1v-134.5h-107.8zm-40.2-74c18.8-7.10543e-15 34.4,15.6 34.4,36.5 0,17.6-12.3,32.7-28.2,35.9h-84.6c-5.4-1.6-7.1-3.5-7.1-4.6 0-17.8 62.5-67.8 85.5-67.8zm-194-0c21.9,0 85.5,50 85.5,67.8 0,1.6-3.7,3.4-6.4,4.6h-85.2c-15.9-3.2-28.2-18.3-28.2-35.9-0.1-19.9 15.6-36.5 34.3-36.5zm34.4,448.2h-132.4v-239.7h132.4v239.7zm0-259.5h-161.5v-93.8h161.6v93.8zm104.2,259.5h-83.4v-353.4h83.4v353.4zm153.3,0h-132.4v-239.7h132.4v239.7zm29.1-259.5h-161.5v-93.8h161.6v93.8z"></path></g></svg>
							<strong>Ваш подарок</strong>
							<h4>Смеситель, мойка <br>или шкаф-купе</h4>
							<a href="#">Подрбнее</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="home-category">
			<div class="home-category-wrapper">
				<strong class="home-category-wrapper-head">Популярные категории</strong>
				<div class="home-category-wrapper-data">
					<a href="#"><strong>Кухни «Модерн» <i>37</i>,</strong></a>
					<a href="#"><strong>Кухни «Класика» <i>24</i></strong></a><br>
					<a href="#"><strong>Шкафы-купе «Класика» <i>20</i>,</strong></a>
					<a href="#"><strong>Шкафы-купе «Хайтек» <i>11</i></strong></a>
				</div>
			</div>
		</div>
		<div class="home-company">
			<div class="home-company-history">
				<div class="home-company-history-block">
					<strong>12 <br><span>лет</span></strong>
					<i>На мебельном <br>рынке <br>России</i>
				</div>
			</div>
			<div class="home-company-wrapper">
				<p>Мебельная компания «Ориент» специализируется на производстве изделий из натурального дерева. Более 10 лет мы успешно работаем в этой сфере, доказывая раз за разом свой профессионализм, готовность выполнить любой каприз заказчика, умение воплотить в жизнь настоящие мечты!</p>
				<h2>Лучшая мебель — мебель на заказ!</h2>
				<p>На производстве работает небольшое число специалистов. Подбор персонала происходит тщательным образом по профессиональному мастерству и отношению к конечному продукту.</p>
				<div class="home-company-wrapper-link">
					<a href="#">Читать полностью</a>
				</div>
			</div>
		</div>
		<div class="home-select">
			<script src="public/js/swiper.js"></script>

			<div class="home-select-wrapper">
				<strong class="home-select-wrapper-head">Подбери мебель себе по душе</strong>
				<div class="home-select-wrapper-tabs">
					<label class="home-select-wrapper-tabs-item active" data-type="Все"><span>Все</span></label>
					<label class="home-select-wrapper-tabs-item" data-type="Кухни"><span>Кухни</span></label>
					<label class="home-select-wrapper-tabs-item" data-type="Шкафы-купе"><span>Шкафы-купе</span></label>
				</div>
				<div class="home-select-wrapper-block">
					<div class="home-select-wrapper-block-item active" data-type="Все">
						<div class="swiper-container home-select-wrapper-block-item-slider">
							<div class="swiper-wrapper">
								<div class="swiper-slide" style="background-image: url('/public/img/slider/1.jpg')" data-facade="МДФ, МДФ ПВХ, МДФ Акрил" data-color="Желтый, Черный, Белый, Синий, Красный">
									<div class="home-select-wrapper-block-item-name">Массив Бук. Тип 5</div>
									<div class="home-select-wrapper-block-item-price">от 7 200 руб. за м<sup><small>2</small></sup></div>
								</div>
								<div class="swiper-slide" style="background-image: url('/public/img/slider/2.jpg')" data-facade="Второй, третий, четвертый" data-color="Черный, Белый, Синий, Красный">
									<div class="home-select-wrapper-block-item-name">Массив Бук. Тип 5</div>
									<div class="home-select-wrapper-block-item-price">от 7 200 руб. за м<sup><small>2</small></sup></div>
								</div>
							</div>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
					<div class="home-select-wrapper-block-item" data-type="Кухни">
						<div class="swiper-container home-select-wrapper-block-item-slider">
							<div class="swiper-wrapper">
								<div class="swiper-slide" style="background-image: url('/public/img/slider/2.jpg')" data-facade="Второй, третий, четвертый" data-color="Черный, Белый, Синий, Красный">
									<div class="home-select-wrapper-block-item-name">Массив Бук. Тип 5</div>
									<div class="home-select-wrapper-block-item-price">от 7 200 руб. за м<sup><small>2</small></sup></div>
								</div>
								<div class="swiper-slide" style="background-image: url('/public/img/slider/1.jpg')" data-facade="МДФ, МДФ ПВХ, МДФ Акрил" data-color="Желтый, Черный, Белый, Синий, Красный">
									<div class="home-select-wrapper-block-item-name">Массив Бук. Тип 5</div>
									<div class="home-select-wrapper-block-item-price">от 7 200 руб. за м<sup><small>2</small></sup></div>
								</div>
							</div>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
					<div class="home-select-wrapper-block-item" data-type="Шкафы-купе">
						<div class="swiper-container home-select-wrapper-block-item-slider">
							<div class="swiper-wrapper">
								<div class="swiper-slide" style="background-image: url('/public/img/slider/1.jpg')" data-facade="МДФ, МДФ ПВХ, МДФ Акрил" data-color="Желтый, Черный, Белый, Синий, Красный">
									<div class="home-select-wrapper-block-item-name">Массив Бук. Тип 5</div>
									<div class="home-select-wrapper-block-item-price">от 7 200 руб. за м<sup><small>2</small></sup></div>
								</div>
								<div class="swiper-slide" style="background-image: url('/public/img/slider/2.jpg')" data-facade="Второй, третий, четвертый" data-color="Черный, Белый, Синий, Красный">
									<div class="home-select-wrapper-block-item-name">Массив Бук. Тип 5</div>
									<div class="home-select-wrapper-block-item-price">от 7 200 руб. за м<sup><small>2</small></sup></div>
								</div>
							</div>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
				</div>
				<div class="home-select-wrapper-data">
					<div class="home-select-wrapper-data-form">
						<button>Узнать точную стоимость</button>
					</div>
					<div class="home-select-wrapper-data-param">
						<div class="home-select-wrapper-data-param-item">
							<strong class="home-select-wrapper-data-param-item-head">Фасады</strong>
							<div class="home-select-wrapper-data-param-item-data">
								МДФ, МДФ ПВХ, <br>МДФ Акрил
							</div>
						</div>
						<div class="home-select-wrapper-data-param-item">
							<strong class="home-select-wrapper-data-param-item-head">Варианты окраски</strong>
							<div class="home-select-wrapper-data-param-item-data">
								Желтый, Черный, Белый, Синий, Красный
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="home-company-top">
			<div class="home-company-top-wrapper">
				<strong class="home-company-top-wrapper-head">Почему выбирают именно нас?</strong>
				<div class="home-company-top-wrapper-data">
					<div class="home-company-top-wrapper-data-item">
						<div class="home-company-top-wrapper-data-item-head">
							<svg></svg>
							<strong>Гарантия лучшей цены</strong>
						</div>
						<p>Если Вам предоставили просчёт кухни ЗОВ с ценой ниже, мы дадим скидку в размере этой страницы.</p>
					</div>
					<div class="home-company-top-wrapper-data-item">
						<div class="home-company-top-wrapper-data-item-head">
							<svg></svg>
							<strong>Гарантия лучшей цены</strong>
						</div>
						<p>Если Вам предоставили просчёт кухни ЗОВ с ценой ниже, мы дадим скидку в размере этой страницы.</p>
					</div>
					<div class="home-company-top-wrapper-data-item">
						<div class="home-company-top-wrapper-data-item-head">
							<svg></svg>
							<strong>Гарантия лучшей цены</strong>
						</div>
						<p>Если Вам предоставили просчёт кухни ЗОВ с ценой ниже, мы дадим скидку в размере этой страницы.</p>
					</div>
					<div class="home-company-top-wrapper-data-item">
						<div class="home-company-top-wrapper-data-item-head">
							<svg></svg>
							<strong>Гарантия лучшей цены</strong>
						</div>
						<p>Если Вам предоставили просчёт кухни ЗОВ с ценой ниже, мы дадим скидку в размере этой страницы.</p>
					</div>
					<div class="home-company-top-wrapper-data-item">
						<div class="home-company-top-wrapper-data-item-head">
							<svg></svg>
							<strong>Гарантия лучшей цены</strong>
						</div>
						<p>Если Вам предоставили просчёт кухни ЗОВ с ценой ниже, мы дадим скидку в размере этой страницы.</p>
					</div>
					<div class="home-company-top-wrapper-data-item">
						<div class="home-company-top-wrapper-data-item-head">
							<svg></svg>
							<strong>Гарантия лучшей цены</strong>
						</div>
						<p>Если Вам предоставили просчёт кухни ЗОВ с ценой ниже, мы дадим скидку в размере этой страницы.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="home-form bg">
			<div class="home-form-wrapper">
				<strong class="home-form-head">Бесплатно разработаем<br>дизайн-проект кухни</strong>
				<p class="home-form-wrapper-text">Вместе с дизайн-проектом вы получите:</p>
				<div class="home-form-wrapper-tabs">
					<div class="home-form-wrapper-tabs-item">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px">
<g>
	<g>
		<path d="M439.449,0H72.551c-5.633,0-10.199,4.567-10.199,10.199v491.602c0,5.632,4.566,10.199,10.199,10.199h366.898    c5.632,0,10.199-4.567,10.199-10.199V10.199C449.648,4.567,445.081,0,439.449,0z M429.25,491.602H82.75V20.398h346.5V491.602z" fill="#5e5e5e"/>
	</g>
</g>
							<g>
								<g>
									<path d="M399.105,38.757h-286.21c-5.633,0-10.199,4.567-10.199,10.199v83.633c0,5.632,4.566,10.199,10.199,10.199h286.21    c5.633,0,10.199-4.567,10.199-10.199V48.956C409.304,43.324,404.737,38.757,399.105,38.757z M388.906,122.39H123.094V59.155    h265.812V122.39z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M163.753,163.187h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199v-52.718C173.953,167.754,169.386,163.187,163.753,163.187z M153.554,215.905h-30.46v-32.319    h30.46V215.905z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M241.657,163.187h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199v-52.718C251.856,167.754,247.29,163.187,241.657,163.187z M231.458,215.905h-30.46v-32.319    h30.46V215.905z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M319.992,163.187h-50.858c-5.632,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.567,10.199,10.199,10.199h50.858    c5.632,0,10.199-4.566,10.199-10.199v-52.718C330.191,167.754,325.624,163.187,319.992,163.187z M309.793,215.905h-30.46v-32.319    h30.46V215.905z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M163.753,241.636h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199v-52.718C173.953,246.204,169.386,241.636,163.753,241.636z M153.554,294.354h-30.46v-32.319    h30.46V294.354z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M241.657,241.636h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199v-52.718C251.856,246.204,247.29,241.636,241.657,241.636z M231.458,294.354h-30.46v-32.319    h30.46V294.354z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M319.992,241.636h-50.858c-5.632,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.567,10.199,10.199,10.199h50.858    c5.632,0,10.199-4.566,10.199-10.199v-52.718C330.191,246.204,325.624,241.636,319.992,241.636z M309.793,294.354h-30.46v-32.319    h30.46V294.354z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M163.753,321.421h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199V331.62C173.953,325.988,169.386,321.421,163.753,321.421z M153.554,374.138h-30.46v-32.319    h30.46V374.138z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M241.657,321.421h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199V331.62C251.856,325.988,247.29,321.421,241.657,321.421z M231.458,374.138h-30.46v-32.319    h30.46V374.138z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M319.992,321.421h-50.858c-5.632,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.567,10.199,10.199,10.199h50.858    c5.632,0,10.199-4.566,10.199-10.199V331.62C330.191,325.988,325.624,321.421,319.992,321.421z M309.793,374.138h-30.46v-32.319    h30.46V374.138z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M163.753,401.147h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.567,10.199-10.199v-52.718C173.953,405.714,169.386,401.147,163.753,401.147z M153.554,453.865h-30.46v-32.319    h30.46V453.865z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M241.657,401.147h-50.858c-5.633,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.566,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.567,10.199-10.199v-52.718C251.856,405.714,247.29,401.147,241.657,401.147z M231.458,453.865h-30.46v-32.319    h30.46V453.865z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M319.992,401.147h-50.858c-5.632,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.567,10.199,10.199,10.199h50.858    c5.632,0,10.199-4.567,10.199-10.199v-52.718C330.191,405.714,325.624,401.147,319.992,401.147z M309.793,453.865h-30.46v-32.319    h30.46V453.865z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M398.776,163.187h-50.858c-5.632,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.567,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199v-52.718C408.975,167.754,404.408,163.187,398.776,163.187z M388.576,215.905h-30.46v-32.319    h30.46V215.905z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M398.776,241.636h-50.858c-5.632,0-10.199,4.567-10.199,10.199v52.718c0,5.632,4.567,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.566,10.199-10.199v-52.718C408.975,246.204,404.408,241.636,398.776,241.636z M388.576,294.354h-30.46v-32.319    h30.46V294.354z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M398.776,321.275h-50.858c-5.632,0-10.199,4.567-10.199,10.199v132.59c0,5.632,4.567,10.199,10.199,10.199h50.858    c5.633,0,10.199-4.567,10.199-10.199v-132.59C408.975,325.842,404.408,321.275,398.776,321.275z M388.576,453.865h-30.46V341.673    h30.46V453.865z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M236.622,91.793h-91.793c-5.633,0-10.199,4.567-10.199,10.199c0,5.632,4.566,10.199,10.199,10.199h91.793    c5.633,0,10.199-4.567,10.199-10.199C246.821,96.36,242.255,91.793,236.622,91.793z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M276.398,91.793h-8.159c-5.632,0-10.199,4.567-10.199,10.199c0,5.632,4.567,10.199,10.199,10.199h8.159    c5.632,0,10.199-4.567,10.199-10.199C286.598,96.36,282.03,91.793,276.398,91.793z" fill="#5e5e5e"/>
								</g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
</svg>
						<strong>Оптимальный расчет стоимости</strong>
					</div>
					<div class="home-form-wrapper-tabs-item">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve" width="512px" height="512px">
<g>
	<path d="M46,33.5c-6.617,0-12,5.383-12,12s5.383,12,12,12s12-5.383,12-12S52.617,33.5,46,33.5z M46,55.5c-5.514,0-10-4.486-10-10   s4.486-10,10-10s10,4.486,10,10S51.514,55.5,46,55.5z" fill="#5e5e5e"/>
	<path d="M52,44.5h-5v-5c0-0.553-0.447-1-1-1s-1,0.447-1,1v6c0,0.553,0.447,1,1,1h6c0.553,0,1-0.447,1-1S52.553,44.5,52,44.5z" fill="#5e5e5e"/>
	<polygon points="18.058,40.578 18.058,17.5 16.058,17.5 11,20.5 11,22.5 16.058,19.5 16.058,40.578  " fill="#5e5e5e"/>
	<path d="M36.058,32.184v-7.345c0-2.042-0.712-3.773-2.134-5.196c-1.423-1.423-3.149-2.134-5.18-2.134s-3.757,0.711-5.179,2.134   c-1.423,1.423-2.134,3.148-2.134,5.179s0.711,3.757,2.134,5.18c1.422,1.423,3.183,2.134,5.282,2.134s3.871-0.78,5.316-2.341v2.148   c0,2.157-0.631,3.791-1.893,4.904c-1.262,1.112-2.753,1.669-4.474,1.669h-0.74v1.893h0.603c1.537,0,2.879-0.27,4.026-0.809   s2.019-1.233,2.615-2.082C35.473,35.866,36.058,34.088,36.058,32.184z M32.599,28.676c-1.044,1.044-2.323,1.565-3.837,1.565   c-1.515,0-2.8-0.521-3.854-1.565c-1.056-1.044-1.583-2.323-1.583-3.837c0-1.515,0.527-2.799,1.583-3.854   c1.055-1.055,2.334-1.583,3.837-1.583s2.782,0.511,3.837,1.531c1.056,1.021,1.583,2.306,1.583,3.854S33.643,27.632,32.599,28.676z" fill="#5e5e5e"/>
	<path d="M28,45.5H2v-33h15h2h14h2h14v16c0,0.553,0.447,1,1,1s1-0.447,1-1v-16v-1v-11H35h-2H19h-2H0v11v1v34c0,0.553,0.447,1,1,1h27   c0.553,0,1-0.447,1-1S28.553,45.5,28,45.5z M35,2.5h14v8H35V2.5z M19,2.5h14v8H19V2.5z M2,2.5h15v8H2V2.5z" fill="#5e5e5e"/>
</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
</svg>
						<strong>Расчет сроков <br>изготовления и доставки</strong>
					</div>
					<div class="home-form-wrapper-tabs-item">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 59.911 59.911" style="enable-background:new 0 0 59.911 59.911;" xml:space="preserve" width="512px" height="512px">
<path d="M59.605,23.399c-0.241-0.281-0.593-0.443-0.965-0.443H56V8.723c0-0.975-0.793-1.768-1.768-1.768H23.566l-2.485-4.141  c-0.317-0.53-0.898-0.859-1.516-0.859H5.767C4.793,1.956,4,2.749,4,3.723v19.232H1.27c-0.37,0-0.721,0.161-0.962,0.441  c-0.242,0.28-0.35,0.651-0.294,1.02l4.917,32.454c0.091,0.618,0.631,1.085,1.257,1.085h47.534c0.626,0,1.166-0.467,1.256-1.081  l4.918-32.454C59.953,24.053,59.847,23.681,59.605,23.399z M6,3.956h13.434l2.485,4.141c0.317,0.53,0.898,0.859,1.516,0.859H54v14  h-1v-4h-1v-3h-1v-3H9v3H8v3H7v4H6V3.956z M9,20.956h42v2H9V20.956z M10,17.956h40v1H10V17.956z M49,15.956H11v-1h38V15.956z   M53.095,55.956H6.815l-4.696-31H4h3h46h3h1.792L53.095,55.956z" fill="#5e5e5e"/>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
</svg>
						<strong>Подбор материалов от дизайнеров</strong>
					</div>
					<div class="home-form-wrapper-tabs-item">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="512px" height="512px">
							<g>
								<path d="m393.2,105.9c9.3-10 15.1-23.6 15.1-38.6 0-31.3-25-56.3-55.3-56.3-23,0-76,34.4-97.2,65.3-21.9-30.9-74.7-64.3-96.8-64.3-30.2,0-55.3,25-55.3,56.3 0,14.5 5.4,27.6 14.1,37.5h-106.8v134.5h29.2v260.7h153.3 125.1 153.3v-260.6h29.1v-134.5h-107.8zm-40.2-74c18.8-7.10543e-15 34.4,15.6 34.4,36.5 0,17.6-12.3,32.7-28.2,35.9h-84.6c-5.4-1.6-7.1-3.5-7.1-4.6 0-17.8 62.5-67.8 85.5-67.8zm-194-0c21.9,0 85.5,50 85.5,67.8 0,1.6-3.7,3.4-6.4,4.6h-85.2c-15.9-3.2-28.2-18.3-28.2-35.9-0.1-19.9 15.6-36.5 34.3-36.5zm34.4,448.2h-132.4v-239.7h132.4v239.7zm0-259.5h-161.5v-93.8h161.6v93.8zm104.2,259.5h-83.4v-353.4h83.4v353.4zm153.3,0h-132.4v-239.7h132.4v239.7zm29.1-259.5h-161.5v-93.8h161.6v93.8z" fill="#5e5e5e"/>
							</g>
						</svg>
						<strong>Смеситель или мойка в подарок</strong>
					</div>
				</div>

				<strong class="home-form-head" style="margin-bottom: 40px">Примеры дизайн-проектов</strong>
				<div class="home-form-wrapper-form form">
					<div class="home-form-wrapper-form-tabs">
						<div class="home-form-wrapper-form-tabs-wrapper">
							<label class="home-form-wrapper-form-tabs-wrapper-item active" data-img="/public/img/30.jpg"><span>1-й вариант</span></label>
							<label class="home-form-wrapper-form-tabs-wrapper-item" data-img="/public/img/30.jpg"><span>2-й вариант</span></label>
							<label class="home-form-wrapper-form-tabs-wrapper-item" data-img="/public/img/30.jpg"><span>3-й вариант</span></label>
						</div>
						<div class="home-form-wrapper-form-tabs-img" style="background-image: url('/public/img/30.jpg')"></div>
					</div>
					<div class="home-form-wrapper-form-data">
						<h3>Получите расчет стомости кухни <br>за 15 минут</h3>

						<div class="home-form-wrapper-form-data-form">
							<span>Введите ваше имя</span>
							<input type="text" placeholder="Ваше имя">

							<span>Введите ваш телефон</span>
							<input type="text" placeholder="+7 (___) ___-__-__">

							<button>Получить расчет стоимости</button>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="home-list">
			<div class="home-list-wrapper">
				<strong class="home-list-wrapper-head">Почему наши цены столь привлекательны, <br> а качество и сроки от этого не страдают?</strong>
				<div class="home-list-wrapper-data">
					<div class="home-list-wrapper-data-item">
						<div class="home-list-wrapper-data-item-img" style="background-image: url('/public/img/news/11.jpg')">
							<strong class="home-list-wrapper-data-item-img-head">Лучшее оборудование</strong>
						</div>
						<p>Производство всех кухонь ЗОВ происходит на современном немецком и итальянском оборудовании.</p>
					</div>
					<div class="home-list-wrapper-data-item">
						<div class="home-list-wrapper-data-item-img" style="background-image: url('/public/img/news/22.jpg')">
							<strong class="home-list-wrapper-data-item-img-head">Команда профессионалов</strong>
						</div>
						<p>Коллектив "ОРИЕНТ" - это прочный тандем лидеров, который уверенно идет вперед.</p>
					</div>
					<div class="home-list-wrapper-data-item">
						<div class="home-list-wrapper-data-item-img" style="background-image: url('/public/img/news/33.jpg')">
							<strong class="home-list-wrapper-data-item-img-head">Собственный склад</strong>
						</div>
						<p>Собственный склад в Москве позволяет нам снизить сроки разработки кухонных гарнитуров, в том числе из массива.</p>
					</div>
					<div class="home-list-wrapper-data-item">
						<div class="home-list-wrapper-data-item-img" style="background-image: url('/public/img/news/44.jpg')">
							<strong class="home-list-wrapper-data-item-img-head">Доставка по Москве</strong>
						</div>
						<p>Вашу кухню не повезет сторонняя транспортная компания. Мы доставим ее своим автопарком, за точность которого ручаемся.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="home-stat">
			<div class="home-stat-wrapper">
				<strong class="home-stat-wrapper-head">Мы гордимся своей работой</strong>
				<div class="home-stat-wrapper-wrapper">
					<div class="home-stat-wrapper-wrapper-item">
						<div class="home-stat-wrapper-wrapper-item-circle">5,2</div>
						<span>лет средний <br>опыт работы <br>специалистов</span>
					</div>
					<div class="home-stat-wrapper-wrapper-item">
						<div class="home-stat-wrapper-wrapper-item-circle">15</div>
						<span>лет срок<br> эксплуатации <br>наших кухонь</span>
					</div>
					<div class="home-stat-wrapper-wrapper-item">
						<div class="home-stat-wrapper-wrapper-item-circle">72</div>
						<span>дизайнеров в <br>штате</span>
					</div>
					<div class="home-stat-wrapper-wrapper-item">
						<div class="home-stat-wrapper-wrapper-item-circle">108</div>
						<span>сотрудников в <br>штате</span>
					</div>
					<div class="home-stat-wrapper-wrapper-item">
						<div class="home-stat-wrapper-wrapper-item-circle">2008</div>
						<span>год основания <br>компании</span>
					</div>
					<div class="home-stat-wrapper-wrapper-item">
						<div class="home-stat-wrapper-wrapper-item-circle">4000</div>
						<span>образцов <br>фасадов</span>
					</div>
				</div>

				<div class="home-stat-wrapper-product">

					<div class="home-stat-wrapper-product-slider">
						<div class="home-stat-wrapper-product-slider-img">
							<div class="home-stat-wrapper-product-slider-img-block" style="background-image: url('/public/img/100.jpg')"></div>
						</div>
						<div class="home-stat-wrapper-product-slider-data">
							<strong class="home-stat-wrapper-product-slider-data-head">Выберите <br>свой подарок</strong>
							<span class="home-stat-wrapper-product-slider-data-type">Подарок</span>

							<div class="home-stat-wrapper-product-slider-data-list">
								<strong class="home-stat-wrapper-product-slider-data-list-name">Немецкий кухонный смеситель</strong>

								<div class="home-stat-wrapper-product-slider-data-list-price">
									<span class="home-stat-wrapper-product-slider-data-list-price-head">Средняя цена в магазинах</span>
									<strong>6 990 руб.</strong>
								</div>

								<div class="home-stat-wrapper-product-slider-data-list-arrow-left">
									<svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
										<path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
										<path d="M0-.5h24v24H0z" fill="none"/>
									</svg>
								</div>
								<div class="home-stat-wrapper-product-slider-data-list-arrow-right">
									<svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
										<path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
										<path d="M0-.25h24v24H0z" fill="none"/>
									</svg>
								</div>
							</div>
							<div class="home-stat-wrapper-product-slider-data-button">
								<button>Получить подарок</button>
								<div>
									<a href="#">Подробнее об условиях акции</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="home-steep">
			<div class="home-steep-wrapper">
				<strong class="home-steep-wrapper-head">Узнайте, как вы получите свою<br> дизйнерскую кухню на долгие годы</strong>
				<div class="home-steep-wrapper-name">
					<span>1-й</span>
					<strong>Этап работы <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg></strong>
				</div>

				<div class="home-steep-wrapper-data">
					<div class="home-steep-wrapper-data-head">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 504.065 504.065" style="enable-background:new 0 0 504.065 504.065;" xml:space="preserve"><path style="fill:#BF392B;" d="M41.493,281.6l45.686-79.951c4.726-8.271,15.36-11.028,23.631-6.302l337.132,196.529  c8.271,4.726,11.028,15.36,6.302,23.631l-45.686,79.951c-4.726,8.271-15.36,11.028-23.631,6.302L47.794,305.231  C39.523,300.505,36.767,289.871,41.493,281.6z"/><path style="fill:#AC3327;" d="M87.573,203.225l-0.788-0.788l-9.058,16.148l258.757,230.794  C336.483,449.378,87.573,203.225,87.573,203.225z"/><path style="fill:#D6D6D6;" d="M408.557,495.458l45.686-79.951c4.726-8.271,1.969-18.905-6.302-23.631L341.21,329.649  l-66.56,107.914l110.277,64.197C393.197,506.486,403.831,503.729,408.557,495.458z"/><path style="fill:#CACACA;" d="M293.554,406.843l-1.969,2.757l44.505,39.778L293.554,406.843z"/><path style="fill:#E2574C;" d="M87.573,179.2l64.591-64.197c6.695-6.695,17.723-6.695,24.418,0l274.905,272.148  c6.695,6.695,6.695,17.329,0,24.025l-64.591,64.197c-6.695,6.695-17.723,6.695-24.418,0L87.573,203.225  C80.877,196.529,80.877,185.895,87.573,179.2z"/><path style="fill:#CB4E44;" d="M147.831,119.335l-14.966,14.572l173.292,259.938C306.157,393.846,147.831,119.335,147.831,119.335z"/><path style="fill:#E0E0E0;" d="M451.486,411.175c6.695-6.695,6.695-17.329,0-24.025l-93.342-92.16l-89.797,87.04l94.129,93.342  c6.695,6.695,17.723,6.695,24.418,0C386.896,475.372,451.486,411.175,451.486,411.175z"/><path style="fill:#D07C40;" d="M154.133,95.705l79.951-46.08c8.271-4.726,18.905-1.969,23.631,6.302L453.85,396.209  c4.726,8.271,1.969,18.905-6.302,23.631l-79.951,46.08c-8.271,4.726-18.905,1.969-23.631-6.302L147.831,119.335  C143.105,111.065,145.862,100.431,154.133,95.705z"/><path style="fill:#D1D1D1;" d="M288.04,362.732l-1.575,1.575l19.692,29.538L288.04,362.732z"/><path style="fill:#EBEBEB;" d="M367.991,466.314l79.951-46.08c8.271-4.726,11.028-15.36,6.302-23.631l-68.529-118.942  l-108.308,66.954l66.56,115.397C349.087,468.283,359.72,471.04,367.991,466.314z"/><path style="fill:#BB6F39;" d="M240.779,56.714c-0.788-3.151-0.788-6.302,0-9.452c-2.363,0.394-4.332,1.182-6.695,2.363  l-16.148,9.452L329,382.031L240.779,56.714z M367.203,439.532h0.788v-0.394L367.203,439.532z"/><path style="fill:#DBDBDB;" d="M367.203,439.532h0.788v-0.394L367.203,439.532z M312.853,322.56l-3.545,2.363L329,382.031  L312.853,322.56z"/><path style="fill:#F4B459;" d="M252.594,35.84l89.009-23.631c9.058-2.363,18.511,2.757,21.268,11.815L464.09,395.815  c2.363,9.058-3.151,18.511-12.209,20.874l-89.009,23.631c-9.058,2.363-18.511-2.757-21.268-11.815L240.779,56.714  C238.022,47.655,243.536,38.203,252.594,35.84z"/><path style="fill:#EFC75E;" d="M362.871,0h81.526c11.422,0,20.48,9.058,20.48,20.48v384.394c0,11.422-9.058,20.48-20.48,20.48  h-81.526c-11.422,0-20.48-9.058-20.48-20.48V20.48C342.391,9.058,351.45,0,362.871,0z"/><path style="fill:#E6E6E6;" d="M308.52,306.806l33.083,121.698c2.363,9.058,11.815,14.572,21.268,11.815l89.009-23.631  c9.059-2.363,14.572-11.815,12.209-20.874l-33.083-120.123L308.52,306.806z"/><path style="fill:#DBA250;" d="M342.391,20.48c0-3.151,0.788-5.908,1.969-8.271c-0.788,0-1.969,0-2.757,0.394l-20.874,5.514  l21.662,313.895V20.48z"/><path style="fill:#EFEFEF;" d="M342.391,275.298v129.575c0,11.422,9.058,20.48,20.48,20.48h81.526c11.422,0,20.48-9.058,20.48-20.48  V275.298H342.391z"/><path style="fill:#DDDDDD;" d="M342.391,298.142l-2.363,0.788l2.363,33.083V298.142z"/><path style="fill:#BFBFBF;" d="M362.083,295.385v19.692h66.954v-19.692H362.083z M362.083,397.785h27.569V385.97h-27.569V397.785z   M362.083,370.215h27.569V358.4h-27.569V370.215z M362.083,342.646h27.569v-11.815h-27.569V342.646z M431.007,378.092  c5.514,0,9.846,4.332,9.846,9.846s-4.332,9.846-9.846,9.846s-9.846-4.332-9.846-9.846  C421.16,382.425,425.493,378.092,431.007,378.092z"/></svg>
						<strong>Выезд<br>дизайнера</strong>
					</div>
					<div class="home-steep-wrapper-data-wrapper">
						<ul>
							<li>Дизайнер вместе с вами выберет стиль будующей кухни, ответит на любые вопросы</li>
							<li>Вы сможете выбрать из 3865 цветов фасадов, 110 витражей, 10 пород дерева и многого другого</li>
							<li>Вам будет предоставлен предварительный расчет стоимости и сроков</li>
						</ul>
						<div class="home-steep-wrapper-data-wrapper-img">
							<div class="home-steep-wrapper-data-wrapper-img-block" style="background-image: url('/public/img/1010.jpg')"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="home-map">
			<strong class="home-map-head">Наш офис в Москве</strong>
			<div class="home-map-wrapper">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=KviddCVBZNN7ZBtPO602I0MZlIFJlatQ&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
			</div>
		</div>

		<footer>
			<div class="footer-wrapper">
				<div class="footer-wrapper-link">
					<a href="#">О компании</a>
					<a href="#">Кухни</a>
					<a href="#">Шкафы-купе</a>
					<a href="#">Материалы</a>
					<a href="#">Оплата и доставка</a>
					<a href="#">Контакты</a>
				</div>
				<div class="footer-wrapper-contact">
					<a href="#">Перезвоните мне</a>
				</div>
			</div>
			<div class="footer-data">
				<div class="footer-data-logo">
					<strong>Ориент</strong>
					<span>Мебельные решения</span>

					<p>© 2004-2016</p>

					<div class="header-head-wrapper-contact-social">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;" xml:space="preserve"><g><path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752   c17.455,0,31.656,14.201,31.656,31.655V122.407z" fill="#FFFFFF"></path><path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" fill="#FFFFFF"></path><path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78   C135.661,29.421,132.821,28.251,129.921,28.251z" fill="#FFFFFF"></path></g></svg>
						<strong>Мы в instagram</strong>
					</div>
				</div>
				<div class="footer-data-contact">
					<span>тел.: +7 (495) 933-10-55,</span>
					<span>Москва, Бережковская набережная,</span>
					<span>д. 16а, БЦ «Riverside Stadion»</span>
				</div>
				<div class="footer-data-febox">
					<div class="footer-content-de-febox">
						<a href="https://febox.ru" target="_blank">
							<svg viewBox="0 0 116.2 116.2"><path class="st0" d="M0,0v116.2h116.2V0H0z M46.5,63h-15v11.8H19.7V54.2h26.8V63z M55.2,51.5H19.7v-9h35.5V51.5z M96,74.7H60.5V54.2 h26.8V63h-15v2.7H96V74.7z M95.5,51.5H60v-9h35.5V51.5z"></path></svg>
							<span><i>Разработка сайта</i><b></b></span>
						</a>

						<span>Все материалы сайта являются объектами авторского права</span>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
 