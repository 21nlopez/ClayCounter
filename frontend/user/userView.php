<?php
    include("../../repository/user/userViewBackend.php");
    include("../head.php");
    include("../nav.php");
?>
    <body>
        <div class="container">
            <div class="container aside">
                <div class="card uv-card" style="width: 18rem;">
                    <img src="../images/genericUser.jpg" class="card-img-top" alt="Generic User">
                    <div class="card-body">
                        <p class="user-name"><strong>Niko Lopez</strong></p>
                        <p class="user-description">Fun and active</p>
                    </div>
                </div>

                <div class="card uv-card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>

            <div class="container score-container">
                <div class="card uv-card">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php
    include("../footer.php");
?>