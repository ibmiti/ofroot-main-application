		<!-- set active class below based on uri -->


        <!-- Header -->
        <header id="header">
				<a href="/" class="title"><mark>OFROOT</mark></a>
				<nav>
                <?php
        switch($uri = Request::getRequestUri()) {
            case ($uri == '/'):
                echo ('
                        <ul>
                            <li><a href="/" class="active">Home</a></li>
                            <li><a href="/capabilities">Capabilities</a></li>
                            <li><a href="/ourmission" >Our Mission</a></li>
                            <li><a href="/ourpromise" class="active">Our Promise</a></li>
                        </ul>
                    ');
            break;
            case($uri == '/capabilities'):
                echo ('
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/capabilities" class="active">Capabilities</a></li>
                    <li><a href="/ourmission" >Our Mission</a></li>
                    <li><a href="/ourpromise">Our Promise</a></li>
                </ul>
            ');
            break;
            case ($uri == '/ourmission'):
                echo ('
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/capabilities">Capabilities</a></li>
                    <li><a href="/ourmission" class="active">Our Mission</a></li>
                    <li><a href="/ourpromise">Our Promise</a></li>
                </ul>
            ');
            break;
            case($uri == '/ourpromise'):
                echo ('
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/capabilities">Capabilities</a></li>
                    <li><a href="/ourmission" >Our Mission</a></li>
                    <li><a href="/ourpromise" class="active">Our Promise</a></li>
                </ul>
            ');
            break;
            // case ($uri == '/admin'):
            //    echo ('
            //     <ul>
            //         <li><a href="/">Home</a></li>
            //         <li><a href="/capabilities">Capabilities</a></li>
            //         <li><a href="/ourmission" >Our Mission</a></li>
            //         <li><a href="/ourpromise" class="active">Our Promise</a></li>
            //     </ul>
            // ');
            // break;
            // case ($uri == '/confirmArticle'):
            //     echo ('
            //     <ul>
            //         <li><a href="/">Home</a></li>
            //         <li><a href="/capabilities">Capabilities</a></li>
            //         <li><a href="/ourmission" >Our Mission</a></li>
            //         <li><a href="/ourpromise" class="active">Our Promise</a></li>
            //     </ul>
            // ');
            // break;
            // case ($uri == '/confirmArticle'):
            //     echo ('
            //     <ul>
            //         <li><a href="/">Home</a></li>
            //         <li><a href="/capabilities">Capabilities</a></li>
            //         <li><a href="/ourmission" >Our Mission</a></li>
            //         <li><a href="/ourpromise" class="active">Our Promise</a></li>
            //     </ul>
            // ');
            // break;
            // default:

        }

        ?>
				</nav>
        </header>




