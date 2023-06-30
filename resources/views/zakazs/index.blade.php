

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://bootstraptema.ru/snippets/form/2017/styles.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://bootstraptema.ru/snippets/form/2017/jquery.payform.min.js"></script>
<script src="https://bootstraptema.ru/snippets/form/2017/script.js"></script>

<div class="container">
<div class="row">

 <div class="creditCardForm">
 <div class="heading">
 <h1>Оплата услуги</h1>
 </div>
 <div class="payment">
 <form>
 <div class="form-group owner">
 <label for="owner">Владелец</label>
 <input type="text" class="form-control" id="owner">
 </div>
 <div class="form-group CVV">
 <label for="cvv">CVV</label>
 <input type="text" class="form-control" id="cvv">
 </div>
 <div class="form-group" id="card-number-field">
 <label for="cardNumber">Номер карты</label>
 <input type="text" class="form-control" id="cardNumber">
 </div>
 <div class="form-group" id="expiration-date">
 <label>Срок годности</label>
 <select>
 <option value="01">Январь</option>
 <option value="02">Февраль </option>
 <option value="03">Март</option>
 <option value="04">Апрель</option>
 <option value="05">Май</option>
 <option value="06">Июнь</option>
 <option value="07">Июль</option>
 <option value="08">Август</option>
 <option value="09">Сентябрь</option>
 <option value="10">Октябрь</option>
 <option value="11">Ноябрь</option>
 <option value="12">Декарбрь</option>
 </select>
 <select>
 <option value="16"> 2016</option>
 <option value="17"> 2017</option>
 <option value="18"> 2018</option>
 <option value="19"> 2019</option>
 <option value="20"> 2020</option>
 <option value="21"> 2021</option>
 </select>
 </div>
 <div class="form-group" id="credit_cards">
 <img src="https://bootstraptema.ru/snippets/form/2017/visa.jpg" id="visa">
 <img src="https://bootstraptema.ru/snippets/form/2017/mastercard.jpg" id="mastercard">
 <img src="https://bootstraptema.ru/snippets/form/2017/amex.jpg" id="amex">
 </div>
 <div class="form-group" id="pay-now">
    <a class="btn btn-success btn-lg d-grid gap-2 col-6 mx-auto"
    href="{{ route('home') }}">
        Купить
    </a>
 </div>
 </form>
 </div>
 </div>

</div>
</div>