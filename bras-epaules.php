<?php include 'header.php'; ?>
    
    <div class="container-fluid vh-100 p0">

        <div class="counter position-absolute bg-success text-white">
            <p class="timer position-absolute d-flex">00:00</p>
            <small class="steps text-center position-abolute d-block font-weight-bold h4 mb-3">Étape 1/5</small>
        </div>

        <article class="exos-group position-absolute">
            <section class="exo vh-100 vw-100 position-absolute active">
                <img src="img/exos/epaules/exo-01.gif" loading="lazy" alt="exo 1">
            </section>
            <section class="exo vh-100 vw-100 position-absolute">
                <img src="img/exos/epaules/exo-02.gif" loading="lazy" alt="exo 2">
            </section>
            <section class="exo vh-100 vw-100 position-absolute">
                <img src="img/exos/epaules/exo-02.gif" loading="lazy" alt="exo 2">
            </section>
        </article>

        <div class="play-pause position-absolute vh-100 vw-100 d-flex justify-content-center align-items-center">
            <button type="button" class="btn btn-lg btn-success">Let's go&nbsp;!</button>
        </div>

    </div>
    
<?php include 'footer.php'; ?>