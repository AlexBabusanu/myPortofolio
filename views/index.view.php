<?php require("shared/header.php"); ?>

<div class="heroBackground">
	<div class="cover"></div>
</div>
<div class="container">
	<div class="name">
		<h1>Alex Babusanu</h1>
		<p>I am a Front-End developer in Iasi, Romania. My goal is to become a Full-Stack developer capable of working in large scale web projects. I am currently working as a WebDev Freelancer</p>
	</div>

	<div class="about">
		<div class="bodyAbout">
			<h4>About</h4>
			<p>I am a Front-End developer in Iasi, Romania. My goal is to become a Full-Stack developer capable of working in large scale web projects. I am currently working as a WebDev Freelancer</p>
			<h4>Services</h4>
			<div>
			<h5>UI/UX</h5>
			<p></p>
		</div>
		<div>
			<h5>Front End Development</h5>
			<p></p>
		</div>
		<div>
			<h5>Brand Identity design</h5>
			<p></p>
		</div>
		</div>
	</div>

	<div class="projects">
		<h1 class="anchor">My Work</h1>
		<?php foreach($projects as $project) : ?>
		<div class="project">
			<div class="image" style="background-image:url(<?= $project['image'] ?>)"></div>

			<div class="text">
				<h4><?= $project["name"] ?> </h4>
				<p> <?= $project["description"] ?></p>
				<div class="technology">
					<p>Built with:</p>
				<ul>
					<?php foreach($project["tech"] as $tech) : ?>
					<li><img src="" title="<?= $tech ?>"></li>
					<?php endforeach ?> 
				</ul>
			</div>
			<div class="buttons">
				<button class="buttonBlack">demo</button>
				<button class="buttonBlack">code</button>
			</div>
			</div>
		</div>
	<?php endforeach ?> </div>
	

</div>

<?php require("shared/footer.php"); ?>



