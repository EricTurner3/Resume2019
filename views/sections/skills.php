<div class="container">
    <div class="text-center">
        <h1>Skillset</h1>
        <blockquote class="blockquote">
            <p class="mb-0">"Through my education, I didn't just develop skills, I didn't just develop the ability to learn, but I developed confidence."</p>
            <footer class="blockquote-footer">Michelle Obama</footer>
        </blockquote>
    </div>

    <hr>
    <h2 class="opportunity-header">Skills</h2>
    <div class="col-md-12">
		<ul class="split-column no-bullets">
		
		<?php foreach($data["skills"] as $index => $skill) { ?>
		
			<li>
				<span class="ability-title"><?php echo $skill['Name']; ?> <?php if(!empty($skill['SubInfo'])) echo "(" . $skill['SubInfo']. ")"; ?></span>
				<span class="ability-score">
				
				<?php for($stars = 1; $stars <= 5; $stars++) { ?>
				
					<i class="fas fa-star <?php echo ($skill['Stars'] >= $stars) ? 'filled' : ''; ?>"></i>
					
				<?php } ?>
					
				</span>
            </li>
            <?php } ?>
		</ul>
	</div>

    <hr>
    <h2 class="opportunity-header">Languages</h2>
    <div class="col-md-12">
		<ul class="split-column no-bullets">
		
		<?php foreach($data["languages"] as $index => $language) { ?>
		
			<li>
				<span class="ability-title"><?php echo $language['Name']; ?> <?php if(!empty($language['SubInfo'])) echo "(" . $language['SubInfo']. ")"; ?></span>
				<span class="ability-score">
				
				<?php for($stars = 1; $stars <= 5; $stars++) { ?>
				
					<i class="fas fa-star <?php echo ($language['Stars'] >= $stars) ? 'filled' : ''; ?>"></i>
					
				<?php } ?>
					
				</span>
			</li>
			<?php } ?>
		</ul>
	</div>

    <hr>
    <h2 class="opportunity-header">Tools</h2>
    <div class="col-md-12">
		<ul class="split-column no-bullets">
		
		<?php foreach($data["tools"] as $index => $tool) { ?>
		
			<li>
				<span class="ability-title"><?php echo $tool['Name']; ?> <?php if(!empty($tool['SubInfo'])) echo "(" . $tool['SubInfo']. ")"; ?></span>
				<span class="ability-score">
				
				<?php for($stars = 1; $stars <= 5; $stars++) { ?>
				
					<i class="fas fa-star <?php echo ($tool['Stars'] >= $stars) ? 'filled' : ''; ?>"></i>
					
				<?php } ?>
					
				</span>
			</li>
        <?php } ?>
		</ul>
	</div>
</div>