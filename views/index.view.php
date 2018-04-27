<?php require("shared/header.php"); ?>

<div class="heroBackground"></div>
<div class="container">
	<div class="name">
		<h1>Alex Babusanu</h1>
		<p>I am a Front-End developer in Iasi, Romania. My goal is to become a Full-Stack developer capable of working in large scale web projects. I am currently working as a WebDev Freelancer</p>
	</div>

	<div class="about">
		<div class="headAbout"></div>
		<div class="bodyAbout"></div>
	</div>

	<div class="projects">
		<?php foreach($projects as $project) : ?>
		<div class="project">
			<div class="image" style="background-image:url(<?= $project['image'] ?>)"></div>
			<div class="text">
				<h4><?= $project["name"] ?> </h4>
				<p> <?= $project["description"] ?></p>

				<ul>
					<?php foreach($project["tech"] as $tech) : ?>
					<li><?= $tech ?> </li>
					<?php endforeach ?> 
				</ul>
				<button>demo</button>
			</div>
		</div>
	<?php endforeach ?> </div>
	</div>
</div>




