<header class="site-header fixed-top">
    <div class="navbar-top-line">
        <div class="top-line autohide">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="top-line-wrap txtwt">
                            <i class="fa-solid fa-envelope mr-2"></i><a href="mailto:info@joximindia.com">info@joximindia.com</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="top-line-wrap txtwt txtrt">
                            <i class="fa-brands fa-whatsapp mr-2"></i><a href="tel:7617812345">7617812345</a>
                                <a href="<?php echo $path; ?>registration"><span class="blink_me">&nbsp;&nbsp;Registration</span></a><a href="<?php echo $path; ?>complain-form"><span class="blink_me">&nbsp;| &nbsp;Complaint</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-my navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $path; ?>">
                    <img src="<?php echo $path; ?>img/logo.png" alt="logo" class="img-fluid logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class=" f-700" href="<?php echo $path; ?>"><img src="<?php echo $path; ?>img/home-icon.png" alt="home-icon" class="img-fluid home-icon"><span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown-nav">
                            <a class="nav-link dropdown-nav-link f-700" href="<?php echo $path; ?>about-us">About Us</a>
                            <!-- <i class="fas fa-caret-down hidden-menu2"></i> -->
                        </li>
                        <li class="nav-item dropdown-nav">
                            <!-- <a class="nav-link dropdown-nav-link f-700">Our Products</a> -->
                            <a class="nav-link dropdown-nav-link f-700 dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Our Products</a>
            
                            <i class="fas fa-caret-down hidden-menu"></i>
                            <ul class="sub-drop sub-menu">
                                <li><a href="<?php echo $path; ?>air-coolers">Air Coolers</a></li>
                                <li><a href="<?php echo $path; ?>ceiling-fans">Ceiling Fan</a></li>
                                <li><a href="<?php echo $path; ?>stabilizer">Stabilizer</a></li>
                                <li><a href="<?php echo $path; ?>geyser">Geyser</a></li>
                                <li><a href="<?php echo $path; ?>mixer-glinder">Mixer Glinder</a></li>
                                <li><a href="<?php echo $path; ?>induction">Induction</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link f-700" href="<?php echo $path; ?>img/joxim-catalogue1.pdf" target="_blank">Downloads</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link f-700" href="<?php echo $path; ?>contact-us">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>