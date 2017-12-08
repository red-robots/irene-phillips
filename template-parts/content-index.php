<?php
/**
 * Template part for displaying page content in index.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?>>
    <div class="top-bar"></div><!--.top-bar-->
    <section class="row-1">
        <div class="wrapper cap clear-bottom">
            <?php $image = get_field("headshot");
            $name_with_certs = get_field("name_with_certs");
            $email = get_field("email");
            $phone = get_field("phone");?>
            <div class="col-1"> 
                <?php if($image):?>
                    <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                <?php endif;
                if($name_with_certs):?>
                    <div class="name-with-certs">
                        <?php echo $name_with_certs;?>
                    </div><!--.name-with-certs-->
                <?php endif;
                if($email):?>
                    <div class="email">
                        <a href="mailto:<?php echo $email;?>">
                            <?php echo $email;?>
                        </a> 
                    </div><!--.email-->
                <?php endif;
                if($phone):?>
                    <div class="phone">
                        <a href="tel:+1<?php echo preg_replace('/[^0-9]/',"",$phone);?>">
                            <?php echo $phone;?>
                        </a>
                    </div><!--.phone-->
                <?php endif;?>
            </div><!--.col-1-->
            <?php $name = get_field("name");
            $title = get_field("title");?>
            <div class="col-2">
                <?php if($name||$title):?>
                    <header>
                        <?php if($name):?>
                            <h1><?php echo $name;?></h1>
                        <?php endif;
                        if($title):?>
                            <div class="spacer"></div><!--.spacer-->
                            <h2><?php echo $title;?></h2> 
                        <?php endif;?>
                    </header>
                <?php endif;?> 
            </div><!--.col-2-->
        </div><!--.wrapper.cap-->
        <hr>
    </section><!--.row-1-->
    <section class="row-2">
        <div class="wrapper cap">
            <?php $row_2_title = get_field("row_2_title");
            $row_2_bmi_title = get_field("row_2_bmi_title");
            $row_2_subtitle = get_field("row_2_subtitle");
            $row_2_copy = get_field("row_2_copy");
            if($row_2_title):?> 
                <header><h2><?php echo $row_2_title;?></h2></header>
            <?php endif;
            if($row_2_subtitle):?>
                <div class="subtitle">
                    <?php echo $row_2_subtitle;?> 
                </div><!--.subtitle-->
            <?php endif;?>
            <div id="bmi">
                <?php if($row_2_bmi_title):?>
                    <header>
                        <h2><?php echo $row_2_bmi_title;?></h2>
                    </header>
                <?php endif;?>
                <div class="weight">
                    <label>Weight (lb):</label><input id="weight" type="number" min="1" max="1000" placeholder="" name="weight">
                </div><!--.weight-->
                <div class="height">
                    <label>Height (ft):</label><input id="height-feet" type="number" min="1" max="7" placeholder="" name="height-feet">
                    <label>Height (in):</label><input id="height-inches" type="number" min="0" max="11" placeholder="" name="height-inches">
                </div><!--.height-->
                <div class="result">
                    BMI:&nbsp;<span id="bmi-result"></span>
                </div><!--.result-->
            </div><!--#bmi-->
            <?php if($row_2_copy):?>
                <div class="copy">
                    <?php echo $row_2_copy;?>
                </div><!--.copy-->
            <?php endif;?>
        </div><!--.wrapper.cap-->
    </section><!--.row-2-->
    <section class="row-3">
        <div class="wrapper cap clear-bottom">
            <div class="col-1"> 
                <?php $row_3_col_1_copy = get_field("row_3_col_1_copy");
                $row_3_col_1_title = get_field("row_3_col_1_title");
                if($row_3_col_1_title):?>
                    <header><h2><?php echo $row_3_col_1_title;?></h2></header>
                <?php endif;
                if($row_3_col_1_copy):?>
                    <div class="copy">
                        <?php echo $row_3_col_1_copy;?>
                    </div><!--.copy-->
                <?php endif;?>
            </div><!--.col-1-->
            <div class="col-2"> 
                <?php $row_3_col_2_copy = get_field("row_3_col_2_copy");
                $row_3_col_2_title = get_field("row_3_col_2_title");
                if($row_3_col_2_title):?>
                    <header><h2><?php echo $row_3_col_2_title;?></h2></header>
                <?php endif;
                if($row_3_col_2_copy):?>
                    <div class="copy">
                        <?php echo $row_3_col_2_copy;?>
                    </div><!--.copy-->
                <?php endif;?>
            </div><!--.col-2-->
        </div><!--.wrapper.cap-->
        <hr>
    </section><!--.row-3-->
    <section class="row-4">
        <div class="wrapper cap">
            <?php $row_4_title = get_field("row_4_title");
            $client_types = get_field("client_types");?>
            <div class="row-1">
                <?php if($row_4_title):?>
                    <header><h2><?php echo $row_4_title;?></h2></header>
                <?php endif;?>
            </div><!--.row-1-->
            <?php if($client_types):?>
                <div class="row-2 clear-bottom">
                    <?php foreach($client_types as $row):?>
                        <div class="client js-blocks">
                            <?php if($row['title']):?>
                                <header><h3><?php echo $row['title'];?></h3></header>
                            <?php endif;
                            if($row['copy']):?>
                                <div class="copy">
                                    <?php echo $row['copy'];?>
                                </div><!--.copy-->
                            <?php endif;?>
                        </div><!--.client-->
                    <?php endforeach;?>
                </div><!--.row-2-->              
            <?php endif;?>
        </div><!--.wrapper.cap-->
        <hr>
    </section><!--.row-4-->
    <section class="row-5">
        <div class="wrapper cap">
            <?php $row_5_title = get_field("row_5_title");
            $testimonials = get_field("testimonials");?>
            <div class="row-1">
                <?php if($row_5_title):?>
                    <header><h2><?php echo $row_5_title;?></h2></header>
                <?php endif;?>
            </div><!--.row-1-->
            <?php if($testimonials):?>
                <div class="row-2 clear-bottom">
                    <div class="col-1">            
                        <?php for($i = 0;$i<count($testimonials);$i+=2):
                            $testimonial = $testimonials[$i];
                            if($testimonial['copy']):?>
                                <div class="testimonial copy">
                                    <?php echo $testimonial['copy'];?>
                                </div><!--.testimonial-->
                            <?php endif;?>
                        <?php endfor;?> 
                    </div><!--.col-1-->
                    <div class="col-2">             
                        <?php for($i = 1;$i<count($testimonials);$i+=2):
                            $testimonial = $testimonials[$i];
                            if($testimonial['copy']):?>
                                <div class="testimonial copy">
                                    <?php echo $testimonial['copy'];?>
                                </div><!--.testimonial-->
                            <?php endif;?>
                        <?php endfor;?> 
                    </div><!--.col-2-->
                </div><!--.row-2-->
            <?php endif;?>
        </div><!--.wrapper.cap-->
    </section><!--.row-5-->
    <section class="row-6">
        <div class="wrapper cap">
            <?php $row_6_title = get_field("row_6_title");
            $row_6_copy = get_field("row_6_copy");
            if($row_6_title):?>
                <header><h2><?php echo $row_6_title;?></h2></header>
            <?php endif;
            if($row_6_copy):?>
                <div class="copy">
                    <?php echo $row_6_copy;?>
                </div><!--.copy-->
            <?php endif;?>
        </div><!--.wrapper.cap-->
    </section><!--.row-6-->
    <?php $row_7_title = get_field("row_7_title");?>
    <?php $row_7_col_1 = get_field("row_7_col_1");
    $row_7_col_2 = get_field("row_7_col_2");
    if($row_7_title||$row_7_col_1||$row_7_col_2):?>
        <section class="row-7">
            <div class="wrapper cap">
                <div class="row-1">
                    <?php if($row_7_title):?>
                        <header><h2><?php echo $row_7_title;?></h2></header>
                    <?php endif;?>
                </div><!--.row-1-->
                <div class="row-2 clear-bottom">
                    <div class="col-1 copy"> 
                        <?php if($row_7_col_1):?>
                            <?php echo $row_7_col_1;?>
                        <?php endif;?>
                    </div><!--.col-1-->
                    <div class="col-2 copy"> 
                        <?php if($row_7_col_2):?>
                            <?php echo $row_7_col_2;?>
                        <?php endif;?>
                    </div><!--.col-2-->
                </div><!--.row-2-->
            </div><!--.wrapper.cap-->
        </section><!--.row-7-->
    <?php endif;?>
</article><!-- #post-## -->
