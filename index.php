<?php 
include('inc/header.php')
?>

<div class="container-fluid">
    
    <div class="row">
        <div class="col-6">
            <div class="card feCard">
                <div class="feContent">
                    <div class="card-body">
                        <h4>Front-End Skills <button onclick="closeFrontEnd()"> <i class="fas fa-times-circle"></i> </button></h4>
                        <p class="mb-4 text">I like to code things from scratch, and enjoy bringing ideas to life in the browser.</p>
                        <p class="skillTitle">Front-End Experience: 4 years</p>
                            <p class="skillTitle">Software I use:</p>
                                <ul>
                                    <li>Photoshop, Illustrator, XD, inVision, Visual Studio Code</li>
                                </ul>
                                <p class="skillTitle">Front-end languages I speak:</p>
            <ul>
                        <li>HTML, CSS, Javascript, Typescript, Sass</li>
            </ul>
                <p class="mt-5 skillTitle">Front-end frameworks I use:</p> 
                    <ul>
                        <li>Angular, Bootstrap</li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
        <div class="card beCard">
                <div class="beContent">
                <div class="card-body">
                <h4>Back-End <button onclick="closeBackEnd()"><i class="fas fa-times-circle"></i></h4>
                <p class="mb-4 text">I genuinely care about people, and love helping fellow designers work on their craft.</p>
                <p class="skillTitle">Back-End Experience: less than 1 year</p>
                <p class="skillTitle">Software I use:</p>
                                <ul>
                                    <li>Visual Studio Code, Sequel Pro</li>
                                </ul>
        <p class="skillTitle">Back-end languages I speak:</p> 
                    <ul>
                        <li>PHP, C#</li>
                    </ul>
                     <p class="mt-5 skillTitle">Frameworks:</p> 
                    <ul>
                        <li>Laraval</li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        

           
<div class="main"> 
    <h1 class="cover-heading">Web Developer</h1>
    <p class="lead">I design and build web applictions.</p>
    <p class="sub-lead lead">Check out my skills or Recent Work</p>
    
    <div class="row">
        <div class="col-5"><img id="computerIcon" onclick="showFrontEnd()" src="imgs/Asset1.png"><p id="frontEnd" >Front-End</p>
        </div>
        <div class="col-2 workLink">
            <a class="btn btn-primary" href="<?php echo URL_ROOT ?>work.php" >Recent Work</a>
        </div>
        <div class="col-5"><img id="serverIcon" onclick="showBackEnd()" src="imgs/Asset2.png"><p id="backEnd">Back-End</p>
    </div>
    </div>  
</div> 
</div>






