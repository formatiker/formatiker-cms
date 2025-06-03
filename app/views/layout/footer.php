    </main>
    <footer class="footer bg-body-inverted text-body-inverted fs-6 mt-3 mt-lg-4 mt-xl-5">
        <div class="footer__top pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-6 mb-5">
                        <a class="logo mb-4" href="#">
                            <img loading="lazy" class="logo__img logo__img--dynamic" src="<?=$footerLogo?>" alt="logo" />
                        </a>
                        <p class="mb-4"><?=$footerInfo?></p>
                        <div class="d-flex">
                            <svg width="37" height="34" viewBox="0 0 37 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M33.7646 9.18399L28.5562 30.095C28.1853 31.6559 26.7944 32.7378 25.187 32.7378H4.87881C2.54507 32.7378 0.875929 30.4503 1.57141 28.2093L8.07806 7.31396C8.52626 5.86117 9.87088 4.85645 11.3855 4.85645H30.3954C31.8637 4.85645 33.0846 5.75286 33.5947 6.98928C33.8883 7.65385 33.9501 8.41122 33.7646 9.18399Z" stroke="white" stroke-width="2" stroke-miterlimit="10"></path>
                                <path d="M24.6006 32.7372H31.9882C33.9819 32.7372 35.5429 31.0525 35.4038 29.0588L33.8737 8.00879" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M14.832 8.59748L16.4394 1.9209" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M25.1865 8.61182L26.6393 1.9043" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M11.7715 17.2822H24.1357" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M10.2266 23.4639H22.5908" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <div class="ps-3">
                                <?php if (!empty($footerOpeningList)): ?>
                                    <h6><b>Erreichbar:</b></h6>
                                    <p ><?php foreach ($footerOpeningList as $footerOpening): ?>
                                        <?= htmlspecialchars($footerOpening) ?><br>
                                    <?php endforeach; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-4 col-lg-7 col-md-6"></div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 mb-5 d-flex justify-content-xl-end">
                        <div>
                            <h5 class="mb-4">Kontakt:</h5>
                            <div class="d-flex">
                                <div class="footer__icon  d-flex align-items-center py-2 px-3 rounded-2">
                                    <svg class="text-light" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.979 12.431C14.979 12.683 14.923 12.942 14.804 13.194C14.685 13.446 14.531 13.684 14.328 13.908C13.985 14.286 13.607 14.559 13.18 14.734C12.76 14.909 12.305 15 11.815 15C11.101 15 10.338 14.832 9.533 14.489C8.728 14.146 7.923 13.684 7.125 13.103C6.32 12.515 5.557 11.864 4.829 11.143C4.108 10.415 3.457 9.652 2.876 8.854C2.302 8.056 1.84 7.258 1.504 6.467C1.168 5.669 1 4.906 1 4.178C1 3.702 1.084 3.247 1.252 2.827C1.42 2.4 1.686 2.008 2.057 1.658C2.505 1.217 2.995 1 3.513 1C3.709 1 3.905 1.042 4.08 1.126C4.262 1.21 4.423 1.336 4.549 1.518L6.173 3.807C6.299 3.982 6.39 4.143 6.453 4.297C6.516 4.444 6.551 4.591 6.551 4.724C6.551 4.892 6.502 5.06 6.404 5.221C6.313 5.382 6.18 5.55 6.012 5.718L5.48 6.271C5.403 6.348 5.368 6.439 5.368 6.551C5.368 6.607 5.375 6.656 5.389 6.712C5.41 6.768 5.431 6.81 5.445 6.852C5.571 7.083 5.788 7.384 6.096 7.748C6.411 8.112 6.747 8.483 7.111 8.854C7.489 9.225 7.853 9.568 8.224 9.883C8.588 10.191 8.889 10.401 9.127 10.527C9.162 10.541 9.204 10.562 9.253 10.583C9.309 10.604 9.365 10.611 9.428 10.611C9.547 10.611 9.638 10.569 9.715 10.492L10.247 9.967C10.422 9.792 10.59 9.659 10.751 9.575C10.912 9.477 11.073 9.428 11.248 9.428C11.381 9.428 11.521 9.456 11.675 9.519C11.829 9.582 11.99 9.673 12.165 9.792L14.482 11.437C14.664 11.563 14.79 11.71 14.867 11.885C14.937 12.06 14.979 12.235 14.979 12.431Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></path>
                                        <path d="M12.5497 5.89986C12.5497 5.47986 12.2207 4.83586 11.7307 4.31086C11.2827 3.82786 10.6877 3.44986 10.0997 3.44986" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14.9997 5.9C14.9997 3.191 12.8087 1 10.0997 1" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>  
                                </div>
                                <div class="ps-3">
                                    <?php if (!empty($footerPhoneLink)&&!empty($footerPhoneDisplay)): ?>
                                        <h6 class="mb-0"><b>Anrufen:</b></h6>
                                        <a class="small" href="tel:<?=$footerPhoneLink?>"><p class="text-body-inverted"><?=$footerPhoneDisplay?></p></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="d-flex mt-3">
                                <div class="footer__icon  d-flex align-items-center py-2 px-3 rounded-2">
                                    <svg class="text-light" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.979 12.431C14.979 12.683 14.923 12.942 14.804 13.194C14.685 13.446 14.531 13.684 14.328 13.908C13.985 14.286 13.607 14.559 13.18 14.734C12.76 14.909 12.305 15 11.815 15C11.101 15 10.338 14.832 9.533 14.489C8.728 14.146 7.923 13.684 7.125 13.103C6.32 12.515 5.557 11.864 4.829 11.143C4.108 10.415 3.457 9.652 2.876 8.854C2.302 8.056 1.84 7.258 1.504 6.467C1.168 5.669 1 4.906 1 4.178C1 3.702 1.084 3.247 1.252 2.827C1.42 2.4 1.686 2.008 2.057 1.658C2.505 1.217 2.995 1 3.513 1C3.709 1 3.905 1.042 4.08 1.126C4.262 1.21 4.423 1.336 4.549 1.518L6.173 3.807C6.299 3.982 6.39 4.143 6.453 4.297C6.516 4.444 6.551 4.591 6.551 4.724C6.551 4.892 6.502 5.06 6.404 5.221C6.313 5.382 6.18 5.55 6.012 5.718L5.48 6.271C5.403 6.348 5.368 6.439 5.368 6.551C5.368 6.607 5.375 6.656 5.389 6.712C5.41 6.768 5.431 6.81 5.445 6.852C5.571 7.083 5.788 7.384 6.096 7.748C6.411 8.112 6.747 8.483 7.111 8.854C7.489 9.225 7.853 9.568 8.224 9.883C8.588 10.191 8.889 10.401 9.127 10.527C9.162 10.541 9.204 10.562 9.253 10.583C9.309 10.604 9.365 10.611 9.428 10.611C9.547 10.611 9.638 10.569 9.715 10.492L10.247 9.967C10.422 9.792 10.59 9.659 10.751 9.575C10.912 9.477 11.073 9.428 11.248 9.428C11.381 9.428 11.521 9.456 11.675 9.519C11.829 9.582 11.99 9.673 12.165 9.792L14.482 11.437C14.664 11.563 14.79 11.71 14.867 11.885C14.937 12.06 14.979 12.235 14.979 12.431Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></path>
                                        <path d="M12.5497 5.89986C12.5497 5.47986 12.2207 4.83586 11.7307 4.31086C11.2827 3.82786 10.6877 3.44986 10.0997 3.44986" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14.9997 5.9C14.9997 3.191 12.8087 1 10.0997 1" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>  
                                </div>
                                <div class="ps-3">
                                    <?php if (!empty($footerEmailLink)&&!empty($footerEmailDisplay)): ?>
                                        <h6 class="mb-0"><b>E-Mail:</b></h6>
                                        <a class="small" href="mailto:<?=$footerEmailLink?>"><p class="text-body-inverted"><?=$footerEmailDisplay?></p></a>
                                    <?php endif; ?>
                                </div>
                            </div>                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__border w-100 bg-body"></div>
        <div class="footer__bottom">
            <div class="container">
                <div class="d-flex align-items-center pb-5 pt-4">
                    <p class="m-0 pe-1">© <?= date('Y') ?> </p>
                    <a class="text-body-inverted pe-1" aria-current="page" href="/formatiker_php/public/">Formatiker</a> 
                    <p class="m-0">All rights reserved. </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="../assets/sal.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            sal({
                threshold: 0.1,
                once: false,
            });
        });
        (() => {
        const toggleBtn = document.getElementById("themeToggle");
        const toggleBtnMobile = document.getElementById("themeToggleMobile");
        
        // Nur bei manuellem Klick in localStorage speichern
        let userClicked = false;

        const applyTheme = (theme) => {
            document.documentElement.setAttribute("data-bs-theme", theme);
            updateBtn(theme);
        };

        const updateBtn = (theme) => {
            if (!toggleBtn) return;
            toggleBtn.innerText = theme === "dark" ? "Dark" : "Light";
            toggleBtnMobile.innerText = theme === "dark" ? "Dark" : "Light";
        };

        const cycleTheme = () => {
            userClicked = true;
            const current = document.documentElement.getAttribute("data-bs-theme");
            const next = current === "dark" ? "light" : "dark";
            applyTheme(next);
            localStorage.setItem("theme", next);
        };

        toggleBtn?.addEventListener("click", cycleTheme);
        toggleBtnMobile?.addEventListener("click", cycleTheme);

        // Theme nur aus localStorage lesen, wenn User bereits geklickt hat
        const savedTheme = localStorage.getItem("theme");
        if (savedTheme) {
            applyTheme(savedTheme);
        } else {
            // Kein savedTheme → prefers-color-scheme verwenden
            const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
            applyTheme(prefersDark ? "dark" : "light");
        }
        })();
    </script>
    <script src="../assets/script.js"></script>
    <script src="../assets/bootstrap.bundle.min.js"></script>
</body>
</html>