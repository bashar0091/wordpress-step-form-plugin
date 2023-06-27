<script>
    jQuery(document).ready(function($) {
        // Check if a step is already stored in sessionStorage
        var activeStep = sessionStorage.getItem('activeStep');
        if (activeStep) {
            // Remove 'active' class from all steps and menu items
            $('.step-wrapper').removeClass('active');
            $('.step-menu-list li').removeClass('active');

            // Add 'active' class to the stored step and its menu item
            $(activeStep).addClass('active');
            $('a[href="' + activeStep + '"]').parent().addClass('active');

            // Add 'active' class to previous steps in the menu
            $('a[href="' + activeStep + '"]').parent().prevAll().addClass('active');
        }

        // Handle click event on menu items
        $('.step-menu-list li').click(function() {
            var step = $(this).find('a').attr('href');

            // Remove 'active' class from all steps and menu items
            $('.step-wrapper').removeClass('active');
            $('.step-menu-list li').removeClass('active');

            // Add 'active' class to the clicked step and its menu item
            $(step).addClass('active');
            $(this).addClass('active');

            // Add 'active' class to previous steps in the menu
            $(this).prevAll().addClass('active');

            // Store the active step in sessionStorage
            sessionStorage.setItem('activeStep', step);
        });

        // Handle click event on "Previous" button
        $('.prev').click(function() {
            var activeMenuItem = $('.step-menu-list li.active');

            if (activeMenuItem.prev().length > 0) {
                activeMenuItem.prev().click();
            }
        });

        // Handle click event on "Next" button
        $('.next').click(function() {
            var activeMenuItem = $('.step-menu-list li.active');

            if (activeMenuItem.next().length > 0) {
                activeMenuItem.next().click();
            }
        });

        // Handle click event on "Previous" button
        $('.toPrev').click(function() {
                var activeMenuItem = $('.step-menu-list li.active');

            if (activeMenuItem.prev().length > 0) {
                activeMenuItem.prev().click();
            }
        });

        // Handle click event on "to Next" button
        $('.toNext').click(function() {
            var activeMenuItem = $('.step-menu-list li.active');

            if (activeMenuItem.next().length > 0) {
                activeMenuItem.next().click();
            }
        });
        
    });

    // dak1, dak2 .... increase 
    $(document).ready(function($) {
        var count = sessionStorage.getItem('dakCount');
        if (count == null) {
            count = 1;
        }

        for (var i = 2; i <= count; i++) {
            var newDak = '<span><a href="#!" class="dak" data-dak-id="' + i + '">Dak ' + i + '<button class="minus btnMinus' + i + '"><i class="fa fa-times"></i></button></a></span>';
            $(newDak).appendTo('.dakwrapper .dakInner');
        }

        $(document).on('click', '.plus', function() {
            count++;
            var newDak = '<span><a href="#!" class="dak" data-dak-id="' + count + '">Dak ' + count + '<button class="minus btnMinus' + count + '"><i class="fa fa-times"></i></button></a></span>';
            $(newDak).appendTo('.dakwrapper .dakInner');
            sessionStorage.setItem('dakCount', count);

            // Save the updated calculation-box-wrapper to sessionStorage
            sessionStorage.setItem('calculationBoxWrapper', $('.calculation-box-wrapper').html());
        });

        $(document).on('click', '.minus', function() {
            var dakElement = $(this).closest('.dak');
            var dakId = dakElement.data('dak-id');

            dakElement.parent().remove();

            count--;
            sessionStorage.setItem('dakCount', count);

            // Save the updated calculation-box-wrapper to sessionStorage
            sessionStorage.setItem('calculationBoxWrapper', $('.calculation-box-wrapper').html());
        });
    });



    // calculation of surface 
    jQuery(document).ready(function($) {
        // Retrieve the length, width, and circumference values from session storage
        var length = sessionStorage.getItem('length');
        var width = sessionStorage.getItem('width');
        var circumference = sessionStorage.getItem('circumference');

        // Update the input fields and result elements with the stored values
        $('.lengthVal').val(length);
        $('.widthVal').val(width);
        $('.circumferenceResult').text(circumference + ' m');

        // Calculate the surface and circumference, and update the result elements
        function calculateMeasurements() {
            var lengthValue = parseFloat($('.lengthVal').val());
            var widthValue = parseFloat($('.widthVal').val());

            // Calculate the surface
            var surface = lengthValue * widthValue;
            $('.surfaceResult').text(surface.toFixed(2));
            $('.surfaceVal').val(surface.toFixed(2));

            // Calculate the circumference
            var circumference = 2 * (lengthValue + widthValue);
            $('.circumferenceResult').text(circumference.toFixed(2));
            $('.circumference').val(circumference.toFixed(2));

            // Save the length, width, and circumference values to session storage
            sessionStorage.setItem('length', lengthValue);
            sessionStorage.setItem('width', widthValue);
            sessionStorage.setItem('circumference', circumference);
        }

        // Calculate and update the measurements on page load
        calculateMeasurements();

        // Add change event handlers to the length and width inputs
        $('.lengthVal, .widthVal').on('input', function() {
            calculateMeasurements();
        });


        // Retrieve the surface and circumference values from session storage
        var surfaceVal = sessionStorage.getItem('surface');
        var circumferenceVal = sessionStorage.getItem('circumferenceSEC');

        if (surfaceVal && circumferenceVal) {
            // Update input values
            $('.surfaceVal').val(surfaceVal);
            $('.circumference').val(circumferenceVal);

            // Update result values
            $('.surfaceResult').text(parseFloat(surfaceVal).toFixed(2));
            $('.circumferenceResult').text(parseFloat(circumferenceVal).toFixed(2));
        }

        $('.surfaceVal, .circumference').on('input', function() {
            var surfaceVal = parseFloat($('.surfaceVal').val());
            var circumferenceVal = parseFloat($('.circumference').val());

            $('.surfaceResult').text(surfaceVal.toFixed(2));
            $('.circumferenceResult').text(circumferenceVal.toFixed(2));

            // Set values in session storage
            sessionStorage.setItem('surface', surfaceVal.toString());
            sessionStorage.setItem('circumferenceSEC', circumferenceVal.toString());
        });


        // Check session storage for the visibility state
        var calculationFirstVisible = sessionStorage.getItem("calculationFirstVisible");

        if (calculationFirstVisible === "false") {
            $(".calculation-first").hide();
            $(".calculation-second").show();
        } else {
            $(".calculation-first").show();
            $(".calculation-second").hide();
        }

        $(".csBtn1").click(function() {
            $(".calculation-first").hide();
            $(".calculation-second").show();

            // Store the visibility state in session storage
            sessionStorage.setItem("calculationFirstVisible", "false");
        });

        $(".csBtn2").click(function() {
            $(".calculation-second").hide();
            $(".calculation-first").show();

            // Store the visibility state in session storage
            sessionStorage.setItem("calculationFirstVisible", "true");

            // Reset the surface and circumference values
            var lengthValue = parseFloat($('.lengthVal').val());
            var widthValue = parseFloat($('.widthVal').val());
            var surface = lengthValue * widthValue;
            var circumference = 2 * (lengthValue + widthValue);

            $('.surfaceResult').text(surface.toFixed(2));
            $('.surfaceVal').val(surface.toFixed(2));
            $('.circumferenceResult').text(circumference.toFixed(2));
            $('.circumference').val(circumference.toFixed(2));

            sessionStorage.setItem('surface', surface.toFixed(2));
            sessionStorage.setItem('circumferenceSEC', circumference.toFixed(2));
        });
    });


    // checked and save the radio button 
    jQuery(document).ready(function($) {
        // Check if there is a saved active card in session storage
        var activeCardIndex = sessionStorage.getItem('activeCardIndex');
        if (activeCardIndex !== null) {
            // Remove the active class from all card-inner divs and circle-inner divs
            $('.card-inner1').removeClass('active');
            $('.circle-inner').removeClass('active');

            // Add the active class to the saved active card-inner div and its corresponding circle-inner div
            $('.card-inner1:eq(' + activeCardIndex + ')').addClass('active');
            $('.card-inner1:eq(' + activeCardIndex + ')').find('.circle-inner').addClass('active');

            // Check the corresponding radio button
            $('.card-inner1:eq(' + activeCardIndex + ')').find('input[type="radio"]').prop('checked', true);
        }

        // Check if there is a saved productPrice and totalResult in session storage
        var savedProductPrice = sessionStorage.getItem('productPrice');
        var savedTotalResult = sessionStorage.getItem('totalResult');

        // Set the saved values in the respective elements
        if (savedProductPrice !== null) {
            $('.priceResult').text(savedProductPrice);
        }
        if (savedTotalResult !== null) {
            $('.totalResult').text(savedTotalResult);
        }

        $('.card-inner1').click(function() {
            // Get the index of the clicked card-inner div
            var cardIndex = $('.card-inner1').index($(this));

            // Check the corresponding checkbox
            $(this).find('input[type="radio"]').prop('checked', true);

            // Remove the active class from all card-inner divs and circle-inner divs
            $('.card-inner1').removeClass('active');
            $('.circle-inner').removeClass('active');

            // Add the active class to the clicked card-inner div and its corresponding circle-inner div
            $(this).addClass('active');
            $(this).find('.circle-inner').addClass('active');

            var priceGet = parseFloat($(this).find('.coast').val());
            var surfaceResult = parseFloat(jQuery('.surfaceResult').text());

            var productPrice = Math.round(priceGet * surfaceResult);

            $('.priceResult').text(productPrice);

            var shippingResult = parseFloat(jQuery('.shippingResult').text());
            var totalResult = Math.round(productPrice + shippingResult);
            $('.totalResult').text(totalResult);

            // Save the index of the active card and the productPrice and totalResult in session storage
            sessionStorage.setItem('activeCardIndex', cardIndex);
            sessionStorage.setItem('productPrice', productPrice);
            sessionStorage.setItem('totalResult', totalResult);
        });
    });


    // extra option click
    jQuery(document).ready(function($) {
        $('#step3 .card-inner2').unbind('click').click(function() {
            $('.ex1Result').show();

            var ex1First = parseFloat($(this).find('.coast').val());
            $('.ex1Result0').text(ex1First);

            var priceResult = parseFloat($('#step3 .priceResult').text());

            var shipping = parseFloat($('#step3 .shippingResult').text());

            var total = (ex1First + priceResult + shipping).toFixed(2);

            $('.totalResult').text(total);

            $('#step3 .circle-inner').removeClass('active');
            $(this).find('.circle-inner').addClass('active');

            // Save state and values in session storage
            sessionStorage.setItem('circleInnerActive', 'true');
            sessionStorage.setItem('ex1ResultVisible', 'true');
            sessionStorage.setItem('priceResult', priceResult);
        });

        $('#step3 .card-inner22').unbind('click').click(function() {
            $('.ex1Result').hide();

            var priceResult = parseFloat($('#step3 .priceResult').text());
            var shipping = parseFloat($('#step3 .shippingResult').text());

            var total = (priceResult + shipping).toFixed(2);

            $('.totalResult').text(total);

            $('#step3 .circle-inner').removeClass('active');
            $(this).find('.circle-inner').addClass('active');

            // Save state and values in session storage
            sessionStorage.setItem('circleInnerActive', 'true');
            sessionStorage.setItem('ex1ResultVisible', 'false');
            sessionStorage.setItem('priceResult', priceResult);
        });

        // Retrieve values from session storage on page load
        var circleInnerActive = sessionStorage.getItem('circleInnerActive');
        var ex1ResultVisible = sessionStorage.getItem('ex1ResultVisible');
        var priceResult = parseFloat(sessionStorage.getItem('priceResult'));

        // Set initial states based on retrieved values
        if (circleInnerActive === 'true') {
            // Add the 'active' class to the appropriate circle-inner element
            $('#step3 .circle-inner').addClass('active');
        }

        if (ex1ResultVisible === 'true') {
            $('.ex1Result').show();
        } else {
            $('.ex1Result').hide();
        }

        if (!isNaN(priceResult)) {
            $('#step3 .priceResult').text(priceResult.toFixed(2));
        }
    });


    // extra option step 
    jQuery(document).ready(function($) {
        $('.option-wrapper label').click(function(){
            $(this).find('.toggle').toggleClass('active');
            $(this).parent().find('.addBtn').toggleClass('show');
        });

        $('.addBtn').click(function(){
            var titleGet = $(this).parent().find('label h3').text();
            var appedDiv = `
            <div class="input-flex">
                <input type="hidden" value="${titleGet}" class="calAdd" />
                <div>
                    <div class="input-relative">
                        <input type="number" class="input length1" min="0" step="0.01" value="1.00">
                        <span class="unit">m</span>
                    </div>
                </div>
                <div>
                    <div class="input-relative">
                        <input type="number" class="input width1" min="0" step="0.01" value="1.00">
                        <span class="unit">m</span>
                    </div>
                </div>
                <button class="removeBtn btn1"><i class="fa fa-trash"></i></button>
            </div>
            `;
            $(this).parent().find('.input-field').append(appedDiv);

            var length1 = $(this).parent().find('.length1').val();
            var width1 = $(this).parent().find('.width1').val();

            var area = length1 * width1;

            $('.tabled1').prepend(`
                <tr class="${titleGet}">
                    <td>${titleGet}</td>
                    <td><span class="surfaceResult">${area}</span> m<sup>2</sup></td>
                </tr>
            `);

            $('.removeBtn').click(function(){
                $(this).parent().remove();
            });

            $('.option-wrapper label').click(function(){
                $(this).parent().find('.input-field .input-flex').remove();

                var titleGet1 = $(this).find('h3').text();
                
                $('.tabled1').find(`.${titleGet1}`).remove();
            });
        });
        
    });


    jQuery(document).ready(function($) {
        $('.option-stepper .plus').click(function(e) {
            e.preventDefault();
            var input = $(this).siblings('input');
            var currentValue = parseInt(input.val());
            var newValue = currentValue + 1;
            input.val(newValue);
        });

        $('.option-stepper .minused').click(function(e) {
            e.preventDefault();
            var input = $(this).siblings('input');
            var currentValue = parseInt(input.val());
            var newValue = currentValue - 1;
            if (newValue < 0) {
                newValue = 0;
            }
            input.val(newValue);
        });
    });


    $('.card3 .card-inner2').click(function(){
        $('.circle-inner').removeClass('active');
        $(this).find('.circle-inner').addClass('active');
    });
    $('.card-inner3').click(function(){
        $('.js-roof-fertilizer-years').show();
    });
    $('.card-inner33').click(function(){
        $('.js-roof-fertilizer-years').hide();
    });

    $('.card4 .card-inner2').click(function(){
        $('.circle-inner').removeClass('active');
        $(this).find('.circle-inner').addClass('active');
    });
</script>