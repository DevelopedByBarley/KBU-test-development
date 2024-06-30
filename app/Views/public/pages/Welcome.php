<!-- Header-->
<script>
	document.addEventListener('DOMContentLoaded', function() {
		var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
		var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
			return new bootstrap.Popover(popoverTriggerEl)
		})
	});
</script>


<div class="container-fluid px-lg-5  mt-5 ">
	<div class="row d-flex align-items-center justify-content-center min-h-95">
		<div class="col-12 col-xl-7 col-xxl-6 px-5 d-flex align-items-center justify-content-center justify-content-xl-end">
			<div class="my-5 text-center text-xl-start">
				<h1 class="fw-bolder fw-bolder display-1">KNORR BREMSE</h1>
				<h2 class="fw-bolder  display-5">Sportnap</h2>
				<p class="fw-normal ">2023. Május 12.</p>
				<div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start mt-4">
					<a data-bs-toggle="modal" data-bs-target="#formModal" class="btn btn-lg shadow gray-50 bg-main-blue dark-bg-gray-50 dark-text-main-blue rounded-0 " href="#features">Regisztráció</a>
				</div>
			</div>
		</div>
		<div class="col-12 col-xl-5 col-xxl-5 text-center">
			<div class="blur-load">
				<img class="img-fluid rounded-5" id="runner" loading="lazy" src="/public/assets/images/running.png" alt="..." />
			</div>
		</div>
	</div>
</div>
</header>

<div class="side-nav d-none d-xl-flex align-items-center justify-content-around">
	<a href="#register" class="text-decoration-none main-blue dark-text-gray-50">Regisztráció</a>
	<a href="#rule-tiles" class="text-decoration-none main-blue dark-text-gray-50">Szabályzat</a>
	<a href="#programs" class="text-decoration-none main-blue dark-text-gray-50">Program</a>
</div>



<div class="container mt-5 mt-lg-0" id="programs">
	<div class="row">
		<div class="col-12">
			<h1 class="fw-bolder light-text-main-blue display-5">Programok</h1>
		</div>
		<div class="col-12 col-lg-6">
			<!-- Section: Timeline -->
			<section class="py-5">
				<ul class="timeline">
					<li class="timeline-item mb-5">
						<h5 class="fw-bold main-blue dark-text-main-orange">07:30 - 08:30</h5>
						<p class="mb-2 fw-bold">Helyszíni regisztráció, reggeli</p>
					</li>

					<li class="timeline-item mb-5">
						<h5 class="fw-bold main-blue dark-text-main-orange">07:30 - 08:30</h5>
						<p class="mb-2 fw-bold">Megnyitó, bajnokságok menetének ismertetése</p>
					</li>

					<li class="timeline-item mb-5">
						<h5 class="fw-bold main-blue dark-text-main-orange">07:30 - 08:30</h5>
						<p class="mb-2 fw-bold">Sportbajnokságok és egyéb programok</p>
						<p class="text-muted">
							Orci varius natoque penatibus et magnis dis parturient montes,
							nascetur ridiculus mus. Nulla ullamcorper arcu lacus, maximus
							facilisis erat pellentesque nec. Duis et dui maximus dui aliquam
							convallis. Quisque consectetur purus erat, et ullamcorper sapien
							tincidunt vitae.
						</p>
					</li>

					<li class="timeline-item mb-5">
						<h5 class="fw-bold main-blue dark-text-main-orange">07:30 - 08:30</h5>
						<p class="tmb-2 fw-bold">Sportbajnokságok és egyéb programok</p>
						<p class="text-muted">
							Nulla ac tellus convallis, pulvinar nulla ac, fermentum diam. Sed
							et urna sit amet massa dapibus tristique non finibus ligula. Nam
							pharetra libero nibh, id feugiat tortor rhoncus vitae. Ut suscipit
							vulputate mattis.
						</p>
					</li>
				</ul>
			</section>
			<!-- Section: Timeline -->
		</div>
		<div class="col-12 col-lg-6">
			<div class="row">
				<div class="col-12 col-md-6 my-2">
					<div class="blur-load">
						<img src="/public/assets/images/polaroid1.png" loading="lazy" class="img-fluid timeline-img" alt="">
					</div>
				</div>
				<div class="col-12 col-md-6 my-2">
					<div class="blur-load">
						<img src="/public/assets/images/polaroid2.png" loading="lazy" class="img-fluid timeline-img" alt="">
					</div>
				</div>
				<div class="col-12 col-md-6 my-2">
					<div class="blur-load">
						<img src="/public/assets/images/polaroid3.png" loading="lazy" class="img-fluid timeline-img" alt="">
					</div>
				</div>
				<div class="col-12 col-md-6 my-2">
					<div class="blur-load">
						<img src="/public/assets/images/polaroid4.png" loading="lazy" class="img-fluid timeline-img" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="first-info" class="gray-50 bg-main-blue dark-bg-light-blue min-h-400 mt-8">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="min-h-400 d-flex align-items-center justify-content-center flex-column p-3 py-5">
					<p class="text-xl fw-bold">
						Transzfer lehetőség: A Knorr-Bremse telephelyről (1238 Budapest, Helsinki út 105.) a
						Sport11-hez indítunk igény szerint buszjáratot. A buszok 7:00-kor indulnak a telephelyről a
						Sportnap helyszínére, majd 14:45-kor visszafele. Kérjük, aki a regisztráció során igényelt transzfert, pontosan érkezzen.
					</p>
					<p class="text-xl red-500 fw-bold">
						Kérünk mindenkit, használjátok a transzfer lehetőséget,
						a tömegközlekedést, vagy érkezzetek egy autóval többen,
						mert erősen korlátozott a parkolóhelyek száma. Tömegközlekedési lehetőség
						a helyszínre: 41-es villamos, vagy 187-es busz Kelenföldről (Őrmező felőli oldal)
					</p>
				</div>

				<div class="min-h-200 bg-main-blue dark-bg-light-blue border-0  skew" style="clip-path: polygon(0 0, 0 53%, 100% 0);">
				</div>
			</div>
		</div>
	</div>
</div>

<section class="container min-h-500" id="rule-tiles">
	<div class="row mt-10 mb-5">
		<div class="col-12">
			<h1 class="text-center display-5 fw-bolder main-blue dark-text-gray-50">
				Sportbajnokságok lebonyolítási
				rendje és szabályzata
			</h1>
		</div>
	</div>
	<div class="row gap-4 d-flex justify-content-center" id="tiles">
		<div class="col-12 col-lg-5 tile p-0 rounded-4 shadow min-h-300">
			<div class="blur-load">
				<img class="img" loading="lazy" src="/public/assets/images/pexels-expressivestanley-3148452.jpg" alt="..." />
			</div>
			<div class="wrapper h-100 bg-main-blue opacity-50"></div>
			<div class="content w-75">
				<h1 class="text-white text-center py-3">Foci</h1>
				<p class="text-white">
					Foci – 5+1 fő/csapat + maximum 4 csere, 2*12
					perces meccsekkel (a jelentkező csapatok
					számától függően több csoportban körmérkőzést
					szervezünk, majd a legjobb 8 csapat kieséses
					rendszerben játszik tovább egészen a döntőkig)
				</p>
				<div class="btn btn-outline-warning rounded-0 btn-xl-lg mb-2">
					Játékszabály
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-5 tile p-0  rounded-4 shadow">
			<div class="blur-load">
				<img class="img" loading="lazy" src="/public/assets/images/pexels-denniz-futalan-339724-2306898.jpg" alt="..." />
			</div>
			<div class="wrapper h-100 bg-main-blue opacity-50"></div>
			<div class="content w-75">
				<h1 class="text-white text-center py-3">Csocsó</h1>
				<p class="text-white">
					Csocsó – 2 fő/csapat, 10 gól vagy 10 perc/meccs
					, amelyik előbb bekövetkezik,
					egyenes kieséssel
				</p>
				<div class="btn btn-outline-warning rounded-0 btn-xl-lg mb-2">
					Játékszabály
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-5 tile p-0  rounded-4 shadow">
			<div class="blur-load">
				<img class="img" loading="lazy" src="/public/assets/images/pexels-kampus-8813526.jpg" alt="..." />
			</div>
			<div class="wrapper  h-100 bg-main-blue opacity-50"></div>
			<div class="content w-75">
				<h1 class="text-white text-center py-3">Sorverseny</h1>
				<p class="text-white">
					Lorem ipsum dolor sit amet, consectetur adipiscing
					elit. Fusce pretium auctor quam,
					ut pharetra justo tristique eu.
					Praesent elit sem, vulputate
					sit amet ultrices eget, accumsan ac ligula.
				</p>
				<div class="btn btn-outline-warning rounded-0 btn-xl-lg mb-2">
					Játékszabály
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-5 tile p-0 rounded-4 shadow">
			<div class="blur-load">
				<img class="img" loading="lazy" src="/public/assets/images/pexels-joshsorenson-976873.jpg" alt="..." />
			</div>
			<div class="wrapper  h-100 bg-main-blue opacity-50"></div>
			<div class="content w-75">
				<h1 class="text-white text-center py-3">Ping Pong</h1>
				<p class="text-white">
					Ping-pong – 2 fő/csapat, egyenes kieséses
					rendszerben, 1 nyert szettig (21 pont) vagy
					15 percig, amelyik előbb bekövetkezik,
					az elődöntők, a bronzmeccs és a döntő
					két nyert szettig tartanak
				</p>
				<div class="btn btn-outline-warning rounded-0 btn-xl-lg mb-2">
					Játékszabály
				</div>
			</div>
		</div>
	</div>


</section>


<div id="second-info" class="gray-50 bg-main-blue dark-bg-light-blue min-h-400 mt-8">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="min-h-400 d-flex justify-content-center flex-column p-xl-5">
					<p class="text-xl fw-bold">
						A sportbajnokságok meccseinek időbeosztása a regisztráció lezárulását
						követően lesz elérhető Actimón, Intraneten és a csapatkapitányoknál.

					</p>
					<p class="text-xl fw-bold">
						Azok a csapatok, akik nem jelennek meg a kiírt meccsük kezdési időpontjáig,
						automatikusan elveszítik az adott mérkőzést.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row" id="register">
		<div class="col-12 min-h-200 d-flex align-items-center justify-content-center">
			<button data-bs-toggle="modal" data-bs-target="#formModal" class="btn btn-warning rounded-5 px-7 text-white btn-lg">Regisztráció</button>
		</div>
	</div>

</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-12 d-flex flex-column flex-md-row align-items-center justify-content-between  my-3">
			<img class="my-4" src="/public/assets/images/icons/logo.png" alt="">
			<a href="https://max.hu/" target="_blank">
				<img src="/public/assets/images/icons/Max_Logo_White.png" class="bg-dark p-3 max-h-200 max-w-200" alt="">
			</a>
		</div>
	</div>
</div>







<style>
	.checkbox {
		opacity: 0;
		position: absolute;
	}

	.checkbox-label {
		width: 50px;
		height: 26px;
		border-radius: 50px;
		position: relative;
		padding: 5px;
		cursor: pointer;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.fa-moon {
		color: #f1c40f;
	}

	.fa-sun {
		color: #f39c12;
	}

	.checkbox-label .ball {
		background-color: #fff;
		width: 22px;
		height: 22px;
		position: absolute;
		left: 2px;
		top: 2px;
		border-radius: 50%;
		transition: transform 0.2s linear;
	}

	.checkbox:checked+.checkbox-label .ball {
		transform: translateX(24px);
	}









	/*  Support me if you like it */
	.support {
		position: absolute;
		right: 20px;
		bottom: 20px;
	}

	.support a {
		color: #292c35;
		font-size: 32px;
		backface-visibility: hidden;
		display: inline-block;
		transition: transform 0.2s ease;
	}

	.support a:hover {
		transform: scale(1.1);
	}


	.timeline-img {
		transition: all .4s ease-in-out;

	}

	.timeline-img:hover {
		transform: scale(1.05) rotate(-5deg) translateY(-5%);
		box-shadow: #292c35;
	}
</style>



<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content dark-bg-main-blue p-lg-5">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">
					Regisztráció
				</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-1 p-md-4 p-lg-0">
				<div class="accordion accordion-flush border" id="accordionFlushExample">
					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
								Jelentkezési útmutató<i class="fa-solid fa-circle-exclamation text-3xl mx-2 amber-500"></i>
							</button>

						</h2>
						<div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">
								<p class="fw-bolder">
									Kedves Kollégák,
								</p>
								<p>
									Szeretnénk felhívni figyelmeteket, hogy a sportnapon való részvételnél az egészségi állapototoknak megfelelő aktivitást válasszatok.
									A sportnapon való részvétel regisztrációjával egyben kinyilvánításra kerül, hogy nincs olyan ismert megbetegedésed, amely az általad választott sportágban, az intenzívebb mozgás által, annak következményeként az egészségi állapotodban rosszabbodást okozna.
									A sportbajnokságokra és minden regisztrációhoz kötött programra a jelentkezéseket érkezési sorrendben fogadjuk.
									A rendezvényre csak egy alkalommal van lehetőség regisztrálni, módosításra nincs lehetőség.
									Minden munkavállaló maximum 2 sportbajnokságra jelentkezhet - 1 csapatsport és 1 páros sport vagy sakk.
									A csoportos órákra a helyszínen lehet majd jelentkezni, érkezési sorrendben.
									Előfordulhat, hogy a céges levelezési rendszerünk a regisztráció visszaigazolását automatikusan karanténba helyezi, ezért azokat néhány órás késéssel kapjátok meg a karanténoldalon keresztül.</p>
								<p class="green-500">
									Szeretnénk felhívni figyelmeteket, hogy a sportnapon való részvételnél az egészségi állapototoknak megfelelő aktivitást válasszatok. A sportnapon való részvétel regisztrációjával egyben kinyilvánításra kerül, hogy nincs olyan ismert megbetegedésed, amely az általad választott sportágban, az intenzívebb mozgás által, annak következményeként az egészségi állapotodban rosszabbodást okozna.
								</p>

							</div>
						</div>
					</div>
				</div>
				<hr class="mt-5">
				<form>
					<!-- 2 column grid layout with text inputs for the first and last names -->
					<div class="row mb-4 mt-4">
						<div class="col-12 col-lg-6 my-2">
							<div class="form-outline">

								<label class="form-label" for="form6Example1">
									Név
									<button type="button" class="btn p-1 m-0" data-bs-toggle="popover" title="Segítség" data-bs-content="Kérjük, hogy a teljes nevedet írd be, elöl legyen a vezetéknév, mögötte a keresztnév.">
										<i class="fa-solid fa-circle-info text-2xl"></i>
									</button>
								</label>
								<input name="name" type="text" id="form6Example1" class="form-control" data-validators='{
                	"name": "name", "required": true, "minLength": 6, "maxLength": 50, "split": true}' />
							</div>
						</div>
						<div class="col-12 col-lg-6 my-2">
							<div class="form-outline">
								<label class="form-label" for="form6Example2">
									Költséghely
									<button type="button" class="btn p-1  m-0" data-bs-toggle="popover" title="Segítség" data-bs-content="Amennyiben nem ismered, kérj segítséget a felettesedtől.">
										<i class="fa-solid fa-circle-info text-2xl"></i>
									</button>
								</label>
								<input type="text" name="class" id="form6Example2" class="form-control" data-validators='{
                	"name": "class", "required": true, "minLength": 5}' />
							</div>
						</div>
						<div class="col-12 col-lg-6 my-2">
							<div class="form-outline mb-4">
								<label class="form-label" for="form6Example3">
									E-mail cím
									<button type="button" class="btn p-1  m-0" data-bs-toggle="popover" title="Segítség" data-bs-content="A céges és a magán e-mail címet egyaránt elfogadjuk.">
										<i class="fa-solid fa-circle-info text-2xl"></i>
									</button>
								</label>
								<input type="email" name="email" id="form6Example3" class="form-control" data-validators='{
							"name": "email", "required": true, "email": true, "minLength": 7}' />
							</div>
						</div>

						<div class="col-12 col-lg-6 my-2">
							<div class="form-outline mb-4">
								<label class="form-label" for="form6Example5">
									Törzsszám
									<button type="button" class="btn p-1  m-0" data-bs-toggle="popover" title="Segítség" data-bs-content="A belépőkártyádon található 6 vagy 8 jegyű szám.">
										<i class="fa-solid fa-circle-info text-2xl"></i>
									</button>
								</label>
								<input type="text" name="alt_id" id="form6Example5" class="form-control" data-validators='{
							"name": "alt_id", "required": true, "minLength": 5}' />
							</div>
						</div>


						<!-- Number input -->
						<div class="form-outline mb-4">
							<label class="form-label" for="form6Example6">
								Főcsapat
								<button type="button" class="btn p-1  m-0" data-bs-toggle="popover" title="Segítség" data-bs-content="Kérjük, figyelmesen olvasd el az összes választható csapat nevét, melyben megtalálod a csapat színét és a csapatkapitány nevét.">
									<i class="fa-solid fa-circle-info text-2xl"></i>
								</button>
							</label>
							<select class="form-select" aria-label="Select main team" required>
								<option value="" selected>Válassza ki a főcsapatot</option>
								<!-- 	<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option> -->
							</select>
						</div>

						<div class="form-outline mb-4">
							<label class="form-label" for="form6Example4">
								Futás
								<button type="button" class="btn p-1  m-0" data-bs-toggle="popover" title="Segítség" data-bs-content="Két távra jelentkezhettek, 2,5 km valamint 5 km. Kérjük, jelöljétek ki a választott távot.">
									<i class="fa-solid fa-circle-info text-2xl"></i>
								</button>
							</label>
							<select class="form-select" aria-label="Select running option">
								<option selected>Táv kiválasztása</option>
								<option value="1">Nem jelentkezem</option>
								<option value="2">Futás (2,5km)</option>
								<option value="2">Futás (5km)</option>
							</select>
						</div>

						<div class="form-outline mb-4">
							<label class="form-label" for="form6Example4">
								Transzferigény
								<button type="button" class="btn p-1  m-0" data-bs-toggle="popover" title="Segítség" data-bs-content="A Knorr-Bremse telephelyről (1238 Budapest, Helsinki út 105.) a Sport11-hez indítunk igény szerint buszjáratot. A buszok 7.00-kor indulnak a telephelyről a Sportnap helyszínére, majd 14.15-kor visszafele. Kérjük, aki igényel transzfert, pontosan érkezzen.">
									<i class="fa-solid fa-circle-info text-2xl"></i>
								</button>
							</label>
							<select class="form-select" aria-label="Default select example">
								<option selected>Open this select menu</option>
								<option value="1">Igen, reggel</option>
								<option value="2">Igen, délután</option>
								<option value="3">Igen, reggel és délután</option>
							</select>
							<small class="d-block mt-2 orange-500 px-3">
								Kérünk mindenkit, használjátok Ļa transzfer lehetőséget, a tömegközlekedést, vagy érkezzetek egy autóval többen, mert erősen korlátozott a parkolóhelyek száma. Tömegközlekedési lehetőség a helyszínre: 41-es villamos, vagy 187-es busz Kelenföldről (Őrmező felőli oldal)
								Reggel: indulás 7.00-kor a Knorr-Bremse H105 telephely elől (érkezés: Sport 11 elé)
								Délután: indulás 14.45-kor a Sport 11 elől (érkezés: Knorr-Bremse H105 telephely elé)</small>
						</div>

						<div class="p-3">
							<div class="form-check d-flex mb-4">
								<input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" />
								<label class="form-check-label" for="form6Example8"> Vegetáriánus ebéd igénylése</label>
							</div>

							<!-- Checkbox -->
							<div class="form-check d-flex mb-4">
								<input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" />
								<label class="form-check-label" for="form6Example8"> Elolvastam a jelentkezési útmutatót.</label>
							</div>
							<div class="form-check d-flex mb-4">
								<input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" />
								<label class="form-check-label" for="form6Example8"> A jelen Adatkezelési Tájékoztató tartalmát megismertem, megértettem és elfogadom.</label>
							</div>
							<div class="form-check d-flex mb-4">
								<input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" />
								<label class="form-check-label" for="form6Example8">

									A jelen Adatkezelési Tájékoztató ismeretében hozzájárulok ahhoz, hogy a Felvételeket,
									a nevemet, a tartózkodási helyemet, valamint beosztásomat, mint személyes adataimat az Adatkezelő,
									a Felvételek felhasználása során, saját marketing és promóciós céljai elérése érdekében
									az Általános Adatvédelmi Rendelet (General Data Protection Regulation, továbbiakban GDPR),
									valamint az információs önrendelkezési jogról és az információszabadságról 2011. évi CXII.
									törvény rendelkezéseinek megfelelően kezelje és megbízottjaihoz, mint adatfeldolgozókhoz továbbítsa

								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
				</form>
			</div>

			<div>
				<img src="/public/assets/images/icons/logo.png" alt="">

			</div>
		</div>
	</div>
</div>


















<style>
	@media (min-width: 1200px) {
		#runner {
			position: relative;
			right: 150px;
		}

	}

	.side-nav {
		width: 100vh;
		height: 45px;
		position: absolute;
		;
		top: 50px;
		-webkit-transform-origin: left top;
		-webkit-transform: rotate(-90deg) translateX(-100%);

		a {
			font-weight: bolder;
		}
	}

	.timeline {
		border-left: 1px solid hsl(0, 0%, 90%);
		position: relative;
		list-style: none;
	}

	.timeline .timeline-item {
		position: relative;
	}

	.timeline .timeline-item:after {
		position: absolute;
		display: block;
		top: 0;
	}

	.timeline .timeline-item:after {
		background-color: hsl(0, 0%, 90%);
		top: 5px;
		left: -38px;
		border-radius: 50%;
		height: 11px;
		width: 11px;
		content: "";
	}

	#first-info {
		position: relative;
	}

	#first-info .skew {
		position: absolute;
		bottom: -199px;
		left: 0;
		right: 0;
		clip-path: polygon(0 0, 0 53%, 100% 0);

	}

	#rule-tiles #tiles .tile {
		position: relative;
		z-index: 9;
		overflow: hidden;
	}

	#rule-tiles #tiles .tile img {
		transition: all .4s ease-in-out;
		width: 100%;
	}

	@media (max-width: 1366px) {
		#rule-tiles #tiles .tile img {
			width: 135% !important;
		}
	}


	#rule-tiles #tiles .tile:hover.tile img {
		transform: scale(1.1);
		transition: all .4s ease-in-out;
	}


	#rule-tiles #tiles .tile .wrapper {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		z-index: 10;
	}


	#rule-tiles #tiles .tile .content {
		position: absolute;
		height: 100%;
		top: 50%;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
		left: 50%;
		transform: translate(-50%, -50%);
		z-index: 11;
	}
</style>