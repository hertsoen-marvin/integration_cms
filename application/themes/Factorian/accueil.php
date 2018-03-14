<?php
  $view->inc("elements/header.php");
?>

<!------------------------------------------------------ Slider --------------------------------------------->


  <div class='row m_bloc_diaporama'> <!--  background-size:cover;	 ou container-fluid ? --> <!--  id='background_img_carrousel' style='background-image:url(imgs/slide-bg-2.jpg); background-repeat:no-repeat; height:100%;' -->
    <?php
      $a = new Area("Diaporama");
      $a->enableGridContainer();
      $a->display($c);
    ?>
  </div>



	<!------------------------------------------------------   --------------------------------------------->


		<div class='container m_bloc_liste1'> <!-- ou container-fluid ? -->
			<div class = 'row'>
				<div class = 'col-md-4'>
          <?php
            $a = new Area("Col1");
            $a->display($c);
          ?>

        </div>
				<div class = 'col-md-4 ' >
          <?php
            $a = new Area("Col2");
            $a->display($c);
          ?>

    		</div>
				<div class = 'col-md-4 ' >
					<div class='row '>
						<div class='col-md-3'>
              <?php
                $a = new Area("Col3-l1-img");
                $a->display($c);
              ?>
            </div>
						<div class='col-md-9'>
              <?php
                $a = new Area("Col3-l1-txt");
                $a->display($c);
              ?>
						</div>
					</div>
					<hr class="style13">
					<div class='row '>
						<div class='col-md-3'>
              <?php
                $a = new Area("Col3-l2-img");
                $a->display($c);
              ?>
						</div>
						<div class='col-md-9'>
              <?php
                $a = new Area("Col3-l2-txt");
                $a->display($c);
              ?>
						</div>
					</div>
					<hr class="style13">
					<div class='row ' >
						<div class='col-md-3'>
              <?php
                $a = new Area("Col3-l3-img");
                $a->display($c);
              ?>
						</div>
						<div class='col-md-9'>
              <?php
                $a = new Area("Col3-l3-txt");
                $a->display($c);
              ?>
						</div>
					</div>
				</div>
			</div>
		</div>


  	<!------------------------------------------------------ CTA --------------------------------------------->

		<div class='row m_bloc_cta' > <!-- ou container-fluid ? -->
			<div class='container'>
				<div class = 'row cta'>
					<div class = 'col-md-9'>
            <?php
                $a = new Area("CTA_left");
                $a->display($c);
             ?>
 					</div>
					<div class = 'col-md-3' >
            <?php
                $a = new Area("CTA_right");
                $a->display($c);
             ?>
					</div>
				</div>
			</div>
		</div>


    	<!------------------------------------------------------  --------------------------------------------->

    		<div class='container'> <!-- ou container-fluid ? -->
    			<div class = 'row m_bloc_sentence'>
    				<div class = 'col-md-4 col-md-offset-4 ' >
    					<h4 style='font-weight: bold;' > We do awesome works for our clients.
    					Check some of our works.</h4>
    				</div>

    			</div>
    		</div>

    	<!------------------------------------------------------  --------------------------------------------->

    		<div class='container'> <!-- ou container-fluid ? -->
    			<div class = 'row m_bloc_liste2'>
    				<div class = 'col-md-12 ' >
              <?php
              $a = new Area("Contenu");
              $a->enableGridContainer();
              $a->display($c);
               ?>
            </div>
    			</div>
    		</div>


<?php $view->inc("elements/footer.php"); ?>
