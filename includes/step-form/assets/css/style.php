<style>
  @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600;700;800&display=swap');
</style>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Mukta', sans-serif;
    }
    body {
        overflow-x: hidden;
    }
    .step-form-header {
        padding: 18px 0;
        border-bottom: 1px solid #d8d8d8;
    }
    .form-container {
        max-width: 1440px;
        padding-left: 15px;
        padding-right: 15px;
    }
    .step-form-header .form-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .step-form-header .logo img {
        max-height: 44px;
    }
    .step-form-header .step-menu-list ul li {
        display: inline-block;
        list-style-type: none;
    }
    .step-form-header .step-menu-list ul li a {
        text-decoration: none;
        color: #5D5C5E;
        font-size: 17px;
        font-weight: 600;
        margin: 0 10px;
        opacity: 0.3;
    }
    .step-form-header .step-menu-list ul li.active a {
        color: #233354;
        opacity: 1;
    }
    .step-form-header .step-menu-list ul li a i {
        font-size: 14px;
        margin-left: 15px;
    }
    .btn1,
    .step-form-header .step-button button {
        background-color: #f5f5f5;
        color: #575757;
        border-color: #f5f5f5;
        box-shadow: 0 2px 0 0 #ccc;
        padding: 10px 16px;
        cursor: pointer;
        line-height: 20px;
        border-radius: 4px;
        border: 1px solid transparent;
        font-size: 14px;
        font-weight: 800;
        transition: 0.3s;
    }
    .btn1:hover,
    .step-form-header .step-button button:hover {
        background-color: #eb7965;
        color: #fff;
        border-color: #eb7965;
        box-shadow: 0 2px 0 0 #b35c4d;
    }
    .btn2,
    .step-form-header .step-button .next {
        background-color: #eb7965;
        color: #fff;
        text-shadow: 0 1px 0 #994f42;
        border-color: #eb7965;
        box-shadow: 0 2px 0 0 #b35c4d;
        margin-left: 10px;
    }
    .step-container {
        max-width: 1200px;
        margin: 0 auto;
        padding-left: 15px;
        padding-right: 15px;
    }
    .step-wrapper {
        display: none;
    }
    .step-wrapper.active {
        display: block;
    }
    .step-wrapper .h2 {
        margin-top: 44px;
        margin-bottom: 24px;
        color: #213156;
    }
    .step-wrapper .p {
        margin: 0 0 15px;
        color: #4b4b4b;
    }
    .step-wrapper .h3 {
        color: #213156;
        font-size: 20px;
        margin: 0 0 8px;
    }
    .step-wrapper .label {
        display: block;
        color: #4b4b4b;
        font-size: 15px;
        font-weight: 500;
        line-height: 18px;
        margin: 0 0 5px;
    }
    .step-wrapper .input-flex {
        display: flex;
        gap: 20px;
    }
    .step-wrapper .input-flex > div {
        margin-bottom: 20px;
    }
    .step-wrapper .input-relative {
        position: relative;
    }
    .step-wrapper .input {
        width: 100%;
        max-width: 470px;
        min-height: 42px;
        line-height: 2;
        padding: 4px 16px;
        border: 1px solid #d2d2d2;
        border-radius: 4px;
        font-weight: 800;
        padding-right: 35px;
        opacity: 0.5;
    }
    .step-wrapper .unit {
        position: absolute;
        right: 10px;
        display: inline-block;
        pointer-events: none;
        opacity: 0.5;
        top: 50%;
        font-size: 18px;
        line-height: 0;
        transform: translateY(-50%);
    }
    .step-wrapper .input:focus {
        outline: none;
    }
    .step-wrapper .button{
        margin-bottom: 30px;
    }
    .step-wrapper .dakwrapper {
        margin: 0 0 10px;
    }
    .step-wrapper .dak {
        display: inline-block;
        height: 45px;
        margin-right: 20px;
        margin-bottom: 10px;
        font-size: 16px;
        line-height: 41px;
        color: #4b4b4b;
        padding: 0 18px;
        border-radius: 4px;
        border: solid 2px #d2d2d2;
        background-color: #ffffff;
        text-decoration: none;
    }
    .step-wrapper .btn3 {
        min-width: 350px;
        margin-left: 0;
        margin-bottom: 33px;
        position: relative;
    }
    .step-wrapper .btn3 i {
        position: absolute;
        right: 10px;
        top: 12px;
    }
    .step-wrapper .btn3.toPrev i {
        position: absolute;
        left: 10px;
        right: inherit;
        top: 12px;
    }
    .step-wrapper .step-right {
        background: #F5F5F5;
        padding: 20px;
        position: relative;
    }
    .step-wrapper .step-right:after {
        content: '';
        position: absolute;
        top: 0;
        left: 100%;
        background: #F5F5F5;
        height: 100%;
        width: 100%;
    }
    .step-wrapper .step-right img {
        margin-left: -85px;
    }
    .step-wrapper .flex {
        display: grid;
        grid-template-columns: 2fr 1fr;
    }
    .step-wrapper .table {
        width: 100%;
    }
    .step-wrapper .table tr td {
        padding-bottom: 15px;
    }
    .step-wrapper .table tr:last-child td {
        padding-bottom: 15px;
    }
    .step-wrapper .table tr td {
        color:#4B4B4B
    }
    .step-wrapper .table tr td:last-child{
        text-align: right;
    }
    .step-wrapper .step-col:first-child {
        padding-right: 50px;
    }
    .step-wrapper .minus {
        background: none;
        border: none;
        padding: 0;
        cursor: pointer;
        line-height: 0;
        margin-left: 10px;
        color: #4b4b4b;
    }
    .step-wrapper .calculation-second {
      display: none;
    }
    .card {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 15px;
        margin-bottom: 20px;
    }
    .card .featured1 {
        background-color: #4c8c42;
        color: #ffffff;
        font-size: 16px;
        line-height: 36px;
        font-weight: 500;
        text-align: center;
        border-radius: 4px;
    }
    .card img {
        width: 100%;
    }
    .card label {
        cursor: pointer;
    }
    .card .card-inner2,
    .card .card-inner1 {
        border-radius: 4px;
        border: solid 2px #d2d2d2;
        padding: 5px;
        transition: 0.3s;
    }
    .card .featurdc1 {
        border-color: #4c8c42;
    }
    .card .card-inner2.active,
    .card .card-inner2:hover,
    .card .card-inner1.active,
    .card .card-inner1:hover{
        border-color: #eb7965;
    }
    .card .card-inner2 label,
    .card .card-inner1 label {
        position: relative;
    }
    .card table tr td {
        color: #4B4B4B;
        font-size: 15px;
        padding-bottom: 10px;
    }
    .card .title1 {
        font-size: 17px;
        font-weight: 700;
        line-height: 20px;
        color: #575757;
        padding-bottom: 15px;
    }
    .card .circle {
        position: absolute;
        top: 70px;
        left: 0;
        height: 22px;
        width: 22px;
        border-radius: 11px;
        background-color: #ffffff;
        box-shadow: 0 0 2px #000;
    }
    .card .circle .circle-inner{
        position: absolute;
        top: 4px;
        left: 4px;
        height: 14px;
        width: 14px;
        background-color: #eb7965;
        border-radius: 7px;
        display: none;
        opacity: 0.5;
    }
    .card .card-inner2:hover .circle-inner,
    .card .card-inner1:hover .circle-inner {
        display: inline-block;
    }
    .card .circle-inner.active {
        display: inline-block;
        opacity: 1;
    }
    .featured2 {
        visibility: hidden;
        opacity: 0;
    }
    .step-wrapper .table .valueGreen {
        color: #4c8c42;
        font-weight: 700;
    }
    .step-wrapper .table .valueBlue {
        color: #4B4B4B;
        font-weight: 700;
    }
    .step-wrapper .card-inner2 input[type="radio"],
    .step-wrapper .card-inner1 input[type="radio"] {
        position: absolute;
        visibility: hidden;
    }
    .step-wrapper .card2 {
        grid-template-columns: 1fr 1fr;
    }
    .csFlex1 {
        display: flex;
        gap: 30px;
        align-items: center;
    }
    .csFlex1 img {
        width: 140px;
    }
    .card2 .card-inner2,
    .card2 .card-inner1 {
        padding: 0;
        border: none;
        display: block;
        margin-bottom: 30px;
        background-color: #f5f5f5;
        color: #575757;
        box-shadow: 0 2px 0 0 #ccc;
        border-radius: 4px;
    }
    .card2 .title1 {
        padding-bottom: 0;
    }
    .card2 .circle {
        top: 10px;
        left: 10px;
    }
    .ex1Result {
        display: none;
    }
    .toggle {
        width: 48px;
        height: 24px;
        position: relative;
        background-color: #c6c5c7;
        border-radius: 12px;
        display: inline-block;
    }
    .toggle.active {
        background-color: #eb7965;
    }
    .toggle .switch {
        width: 18px;
        height: 18px;
        position: absolute;
        top: 3px;
        left: 3px;
        background-color: #fff;
        border-radius: 50%;
    }
    .toggle.active .switch {
        left: 27px;
    }
    .step4-option-wrapper {
        margin-bottom: 30px;
    }
    .step4-option-wrapper .option-wrapper {
        padding: 30px 30px 30px 30px;
    }
    .step4-option-wrapper .option-wrapper:nth-child(odd) {
        background-color: rgba(245,245,245,0.4);
    }
    .step4-option-wrapper .option-wrapper label {
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
    }
    .step4-option-wrapper .option-wrapper input[type="checkbox"] {
        position: absolute;
        opacity: 0;
        visibility: hidden;
    }
    .step4-option-wrapper .input-field {
        margin-top: 8px;
    }
    .addBtn {
        display: none;
        margin-top: 8px;
    }
    .addBtn.show {
        display: inline-block;
    }
    .input-field .input-flex {
        margin-bottom: 15px;
    }
    .input-field .input-flex > div {
        margin-bottom: 0;
    }
    .product-wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    .product-card {
        display: flex;
        margin-bottom: 30px;
        background-color: #f5f5f5;
        color: #575757;
        box-shadow: 0 2px 0 0 #ccc;
        border-radius: 4px;
    }
    .product-image img {
        width: 125px;
        height: 100%;
        object-fit: contain;
        background: #fff;
    }
    .product-des {
        padding: 20px;
    }
    .color1 {
        color: #4c8c42;
    }
    .option-stepper input {
        min-height: 42px;
        padding: 4px 16px;
        border: 1px solid #d2d2d2;
        border-radius: 4px;
        width: 70px;
    }
    .option-stepper button {
        background-color: transparent;
        width: 40px;
        margin-left: 6px;
        min-height: 40px;
        color: #4b4b4b;
        line-height: 20px;
        text-decoration: none;
        border-radius: 4px;
        cursor: pointer;
        border: 1px solid;
    }
    .js-roof-fertilizer-years {
        width: 100%;
        max-width: 470px;
        min-height: 42px;
        line-height: 2;
        padding: 4px 16px;
        border: 1px solid #d2d2d2;
        border-radius: 4px;
        margin-bottom: 30px;
        display: none;
    }
    .step-wrapper .flex2 {
        grid-template-columns: 1fr 1.5fr;
    }
    .form--calculator input {
        width: 100%;
        max-width: 470px;
        min-height: 42px;
        line-height: 2;
        border: 1px solid #d2d2d2;
        border-radius: 4px;
        padding: 7px 15px;
    }
    .form--calculator .form-row {
        display: flex;
        gap: 20px;
        margin-bottom: 15px;
    }
    .form--calculator .form-row button {
        font-size: 15px;
        font-weight: 600;
        line-height: 20px;
        text-align: center;
        padding: 10px 16px;
        border: 1px solid transparent;
        border-radius: 4px;
        cursor: pointer;
        transition: all .3s;
        background-color: transparent;
        color: #233354;
        border-color: #233354;
        width: 100%;
    }
    .btn1 a {
        color: #fff;
        text-decoration: none;
        width: 100%;
        height: 100%;
        display: block;
    }
</style>