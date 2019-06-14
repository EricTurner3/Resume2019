<div class="container">
                    <div class="text-center">
                        <h1>Opportunites</h1>
                        <blockquote class="blockquote">
                            <p class="mb-0">"Within our dreams and aspirations we find our opportunities.".</p>
                            <footer class="blockquote-footer">Sugar Ray Leonard</footer>
                        </blockquote>
                    </div>
                    <hr>

                    <!-- Education Block -->

                    <h2 class="opportunity-header">Education</h2>
                    <?php foreach ($data['schools'] as $school){?>
                    <div class="row">
                        <div class="col-md-4"> 
                            <h4><?php echo $school['Name']?></h4>
                            <p><?php echo date("M Y", strtotime($school['startDate']));?> - <?php if(!empty($school['endDate'])) echo date("M Y", strtotime($school['endDate'])); else echo 'Present';?></p>
                        </div>
                        <div class="col-md-8">
                            <h4><?php echo $school['ProgramTitle']?></h4>
                            <p><?php echo $school['Description']?></p>
                            <div class="opportunity-details">
                                <p><i class="fas fa-map-marker-alt"></i> <?php echo $school['Location']?></p> <span class="seperator"> | </span> <i class="fas fa-external-link-alt"></i> <a href="<?php echo $school['WebLink']?>" target="_blank">More Info</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <hr>


                    <!-- Careers Block -->
                    <h2 class="opportunity-header">Careers</h2>
                    <?php foreach ($data['careers'] as $career){?>
                    <div class="row">
                        <div class="col-md-4"> 
                            <h4><?php echo $career['Name']?></h4>
                            <p><?php echo date("M Y", strtotime($career['startDate']));?> - <?php if(!empty($career['endDate'])) echo date("M Y", strtotime($career['endDate'])); else echo 'Present';?></p>
                        </div>
                        <div class="col-md-8">
                            <h4><?php echo $career['JobTitle']?></h4>
                            <p><?php echo $career['Description']?></p>
                            <div class="opportunity-details">
                                <p><i class="fas fa-map-marker-alt"></i> <?php echo $career['Location']?></p> <span class="seperator"> | </span> <i class="fas fa-external-link-alt"></i> <a href="<?php echo $career['WebLink']?>" target="_blank">More Info</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
</div>