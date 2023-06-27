<div class="step-wrapper active" id="step1">
    <div class="step-container flex">
        <div class="step-col">
            <h2 class="h2">Bereken hier jouw groendak</h2>
            <p class="p">Volg de stappen en vraag jouw offerte aan, je kunt ook direct bestellen!</p>

            <div class="calculation-box-wrapper">
                <div class="calculation-box">
                    <div class="calculation-first">
                        <h3 class="h3">Wat zijn de afmetingen van je dak?</h3>
                        <div class="input-flex">
                            <div>
                                <label for="" class="label">Lengte</label>
                                <div class="input-relative">
                                    <input type="number" class="input lengthVal" min="0" step="0.01">
                                    <span class="unit">m</span>
                                </div>
                            </div>
                            <div>
                                <label for="" class="label">Breedte</label>
                                <div class="input-relative">
                                    <input type="number" class="input widthVal" min="0" step="0.01">
                                    <span class="unit">m</span>
                                </div>
                            </div>
                        </div>
                        <button class="button btn1 csBtn1">Ik vul liever het oppervlak en de omtrek in</button>
                    </div>

                    <div class="calculation-second">
                        <h3 class="h3">Hoe groot is je dak?</h3>
                        <div class="input-flex">
                            <div>
                                <label for="" class="label">Surface</label>
                                <div class="input-relative">
                                    <input type="number" class="input surfaceVal" min="0" step="0.01">
                                    <span class="unit">m<sup>2</sup></span>
                                </div>
                            </div>
                            <div>
                                <label for="" class="label">Circumference</label>
                                <div class="input-relative">
                                    <input type="number" class="input circumference" min="0" step="0.01">
                                    <span class="unit">m</span>
                                </div>
                            </div>
                        </div>
                        <button class="button btn1 csBtn2">Ik vul liever lengte en breedte in</button>
                    </div>
                </div>
            </div>

            <h3 class="h3">Hier kan je meerdere daken toevoegen</h3>

            <div class="dakwrapper">
                <span class="dakInner">
                    <a href="#!" class="dak">Dak 1</a>
                </span>
                <button class="plus btn1"><i class="fa fa-plus"></i></button>
            </div>

            <button class="btn1 btn2 btn3 toNext">Volgende stap <i class="fa fa-arrow-right"></i></button>
        </div>

        <div class="step-col">
            <div class="step-right">
                <img src="https://www.dakvergroeners.nl/lcms2/RESIZE/w314-h9999-c314x278-q90/maatwerk/roof-calculator/img/roof-3@2x.png" alt="image">

                <h3 class="h3">Your Green Roof</h3>

                <table class="table">
                    <tr>
                        <td>Surface</td>
                        <td><span class="surfaceResult"></span> m<sup>2</sup></td>
                    </tr>
                    <tr>
                        <td>Circumference</td>
                        <td><span class="circumferenceResult"></span> m</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>