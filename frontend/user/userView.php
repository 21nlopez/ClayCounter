<?php
    include("../../repository/user/userViewBackend.php");
    include("../head.php");
    include("../nav.php");
?>
    <body>
        <div class="container">
            <div class="container aside profile-card">

                <div class="card uv-card" style="width: 18rem;">
                    <img src="../images/genericUser.jpg" class="card-img-top" alt="Generic User">
                    <div class="card-body">
                        <p class="user-name"><strong>Niko Lopez</strong></p>
                        <p class="user-followsandviews">100 followers | 1,050 views</p>
                        <button class="btn btn-primary">Follow</button>
                    </div>
                </div>

                <div class="card uv-card gun-collection-card" style="width: 18rem;">
                    <div class="card-body">
                        <h5>Collection</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Franchi Insticnt Sporting</li>
                        <li class="list-group-item">Browning Citori CXS</li>
                        <li class="list-group-item">Berretta Silver Pigeon I</li>
                    </ul>
                </div>

                <div class="card uv-card gun-collection-card" style="width: 18rem;">
                    <div class="card-body">
                        <h5>Fast Facts</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Most Used Shotgun:<br>Browning Citori CXS<br>10,000 targets</li>
                        <li class="list-group-item">Best Event:<br>American Skeet<br>87% Accuracy</li>
                        <li class="list-group-item">Best Straight:<br>American Skeet<br>50 Targets</li>
                    </ul>
                </div>

            </div>

            <table class="table table-striped score-container">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Event</th>
                        <th scope="col">Score</th>
                        <th scope="col">Gun</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">6/19</th>
                        <td>American Skeet</td>
                        <td>24/25</td>
                        <td>Browning Citori CXS</td>
                    </tr>
                    <tr>
                        <th scope="row">6/18</th>
                        <td>Doubles Trap</td>
                        <td>41/50</td>
                        <td>Franchii Instinct Sporting</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </body>
<?php
    include("../footer.php");
?>