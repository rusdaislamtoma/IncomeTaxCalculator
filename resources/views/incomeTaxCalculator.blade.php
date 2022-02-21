<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Income Tax Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    @include('style')
</head>
<body>
    <div class="container">
        <div class="notify-section">
            <p id="notify-fail" class="notify">❌ Only Positive Integer value is accepted, Please try again</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center text-info">Income Tax Calculator</h3>
            </div>
            <div class="col-md-6">
                <div class="input-section half-width">
                    <div class="mb-2">
                        <div class="form-check-inline">
                          <label class="form-check-label text-light font-weight-bold" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="type" value="Yearly" checked>Yearly
                          </label>
                        </div>
                        <div class="form-check-inline">
                          <label class="form-check-label text-light font-weight-bold" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="type" value="Monthly">Monthly
                          </label>
                        </div>
                    </div>
                    <input id="typed-numbers" class="form-control" type="text">
                    <div class="numbers">
                        <div id="key-pad" class="calc-body">
                            <div class="calc-button-row">
                              <div class="button">7</div>
                              <div class="button">8</div>
                              <div class="button">9</div>
                            </div>
                            <div class="calc-button-row">
                              <div class="button">4</div>
                              <div class="button">5</div>
                              <div class="button">6</div>
                            </div>
                            <div class="calc-button-row">
                              <div class="button">1</div>
                              <div class="button">2</div>
                              <div class="button">3</div>
                            </div>
                            <div class="calc-button-row">
                                <div class="button">CE</div>
                                <div class="button">0</div>
                                <div class="button">C</div>
                            </div>  
                            <div>
                                <button onclick="calculateIncomeTax()" type="submit" class="submit-btn">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-md-6">
            <div class="half-width">
                <div class="taxPortion">
                    <span>Tax :</span>&nbsp;&nbsp;<span id="incomeTaxField"></span>
                    <p id="message"></p>
                </div> 
            </div>
        </div>
    </div>

    @include('_scripts')
   
</body>
</html>
