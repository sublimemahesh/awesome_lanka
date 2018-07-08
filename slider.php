
<div class="container-fluid" >
    <div class="row">     
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-bottom: 26px;">

            <div class="carousel-inner">
                <?php
                $li = '';
                foreach (Slider::all() as $key => $Simages) {
                    if ($key === 0) {
                        $li .= ' <li data-target="#carousel-example-generic" data-slide-to="' . $key . '" class="active"></li>';
                        ?>
                        <div class="item active">
                            <img src="upload/slider/<?php echo $Simages['image_name']; ?>" alt="First slide" >
                        </div>
                        <?php
                    } else {
                        $li .= '<li data-target="#carousel-example-generic" data-slide-to="' . $key . '"></li>';
                        ?>
                        <div class="item">
                            <img src="upload/slider/<?php echo $Simages['image_name']; ?>" alt="First slide" >

                        </div>
                        <?php
                    }
                }
                ?>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div> 
            <ol class="carousel-indicators"> 
                <?php echo $li; ?>
            </ol>
        </div>
    </div>
</div>
