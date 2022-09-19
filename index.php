<?php 


/**
 * File types 
 * 
*/

$docxFiles = glob('./content/*.docx');
// $pptx = glob('');



/**
 * Convert function
 * 
 */
function renameDoc($file){
    $renamedFile = str_replace(
        [' ', './content/', '.docx', 'ç', 'Ç', 'ã', 'Ã', 'â', 'Â', 'á', 'Á', 'à', 'À', 'ê', 'Ê', 'é', 'É', 'í', 'Í', 'ô', 'Ô', 'õ', 'Õ', 'ó', 'Ó', 'ú', 'Ú', '(', ')', ' ', '--', '-–-'], 
        ['-', '', '.php', 'c', 'c', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'e', 'e', 'e', 'e', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', '-', '', '-', '-', '-'], 
        $file);
    $renamedFile = strtolower($renamedFile);
    
    return $renamedFile;
    // output: file.<extension>
} 




/**
 * Create files based on file type called
 * 
 */
foreach($docxFiles as $docKey => $docxFile){
    $page = fopen(renameDoc($docxFile), 'w');
    $pageContent = 
    
'<?php
include("includes/seo.php");
include("includes/header.php");
include("includes/components/breadcrumbs.php");
?>

<!-- main -->
<main>
    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Lorem Ipsum</h2>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, esse? Facere itaque repudiandae ipsum cupiditate ut nostrum aliquid eos ducimus quae, quidem aliquam soluta vero ab animi accusamus nam numquam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, esse? Facere itaque repudiandae ipsum cupiditate ut nostrum aliquid eos ducimus quae, quidem aliquam soluta vero ab animi accusamus nam numquam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, esse? Facere itaque repudiandae ipsum cupiditate ut nostrum aliquid eos ducimus quae, quidem aliquam soluta vero ab animi accusamus nam numquam.</p>

                    <img src="src/img/about.jpg" class="img-fluid my-4" loading="lazy" alt="<?= $keyword ?>" title="<?= $keyword ?>">


                    <h2>Lorem Ipsum</h2>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, esse? Facere itaque repudiandae ipsum cupiditate ut nostrum aliquid eos ducimus quae, quidem aliquam soluta vero ab animi accusamus nam numquam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, esse? Facere itaque repudiandae ipsum cupiditate ut nostrum aliquid eos ducimus quae, quidem aliquam soluta vero ab animi accusamus nam numquam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, esse? Facere itaque repudiandae ipsum cupiditate ut nostrum aliquid eos ducimus quae, quidem aliquam soluta vero ab animi accusamus nam numquam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, esse? Facere itaque repudiandae ipsum cupiditate ut nostrum aliquid eos ducimus quae, quidem aliquam soluta vero ab animi accusamus nam numquam.</p>

                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    </ul>

                    <h2>Lorem Ipsum</h2>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, esse? Facere itaque repudiandae ipsum cupiditate ut nostrum aliquid eos ducimus quae, quidem aliquam soluta vero ab animi accusamus nam numquam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, esse? Facere itaque repudiandae ipsum cupiditate ut nostrum aliquid eos ducimus quae, quidem aliquam soluta vero ab animi accusamus nam numquam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, esse? Facere itaque repudiandae ipsum cupiditate ut nostrum aliquid eos ducimus quae, quidem aliquam soluta vero ab animi accusamus nam numquam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, esse? Facere itaque repudiandae ipsum cupiditate ut nostrum aliquid eos ducimus quae, quidem aliquam soluta vero ab animi accusamus nam numquam.</p>

                </div>

                <?php include("includes/components/aside.php") ?>

            </div>
        </div>
    </div>
</main>
<!-- /.main -->


<?php 
include("includes/footer.php");
include("includes/js.php"); 
?>';

    fwrite($page, $pageContent); // write file with the content of $pageContent
    fclose($page);
}


?>