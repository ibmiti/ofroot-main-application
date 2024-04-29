<style>
   body {
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}

.navbar-bottom {
  position: fixed;
  top: 0; /* Set to top */
  width: 100%;
  background-color: rgba(51, 51, 51, 0.7); /* Set your desired background color with transparency */
  transition: background-color 0.3s ease-in-out; /* Transition background-color */
}

.navbar-bottom.hide-on-scroll {
  background-color: #333; /* Set the background color when scrolling */
}

</style>

<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-bottom hide-on-scroll text-white"> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-bottom  hide-on-scroll" style="background-color:#1cb495;color:white;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">OFROOT</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="https://substack.com/@ofroottech">Blog</a>
                            </li>
                            <li class="nav-item">
                            <!-- <a class="nav-link" href="{{ route('health') }}">Health Services</a> -->
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

<script>


   var lastScrollTop = 0;
window.addEventListener("scroll", function () {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop) {
        document.querySelector('.navbar-bottom').classList.add('hide-on-scroll');
    } else {
        document.querySelector('.navbar-bottom').classList.remove('hide-on-scroll');
    }
    lastScrollTop = scrollTop;
});

</script>
