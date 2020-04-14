@extends('layouts.master')
@section('content')
    
<h4>Finaliser votre commande</h4>
<form action="#"><br>
  <fieldset>
      <label for="nom">Nom <em>*</em></label>
      <input id="nom" placeholder="Taper votre nom" autofocus="" required=""><br>
      <label for="Prénom">Prénom<em>*</em></label>
      <input id="Prénom" placeholder="Taper votre prénom" autofocus="" required=""><br>
      <label for="telephone">Portable</label>
      <input id="telephone" type="tel" placeholder="53 874 827" pattern="06[0-9]{8}"><br>
      <label for="email">Email <em>*</em></label>
      <input id="email" type="email" placeholder="ifcvjol@cccccl.com" required="" pattern="[a-zA-Z]*.[a-zA-Z]*@polytechnique.edu"><br>
      <label for="age">Age<em>*</em></label>
      <input id="age" type="number" placeholder="Taper votre age" pattern="[0-9]{2}" required=""><br>
      <label for="sexe">Sexe</label>
      <select id="sexe">
        <option value="F" name="sexe">Femme</option>
        <option value="H" name="sexe">Homme</option>
      </select><br>
      <label for="Adresse">Adresse<em>*</em></label>
      <input id="Adresse"  placeholder="Rue/Appartement/Suite/Bloc/Batiment" pattern="[0-9]{2}" required=""><br>
      <label for="Région">Région<em>*</em></label>
      <select required="1" data-msg-required="Champs requis" class="osh-input -full-width" name="ShippingAddressForm[fk_customer_address_region]" id="ShippingAddressForm_fk_customer_address_region">
        <option value="" selected="selected">Sélectionner...</option>
        <option value="2">Ariana</option>
        <option value="3">Ben Arous</option>
        <option value="7">Bizerte</option>
        <option value="8">Béja</option>
        <option value="22">Gabes</option>
        <option value="19">Gafsa</option>
        <option value="9">Jendouba</option>
        <option value="12">Kairouan</option>
        <option value="13">Kasserine</option>
        <option value="21">Kebili</option>
        <option value="4">La Manouba</option>
        <option value="10">Le Kef</option>
        <option value="17">Mahdia</option>
        <option value="16">Monastir</option>
        <option value="23">Médenine</option>
        <option value="5">Nabeul</option>
        <option value="18">Sfax</option>
        <option value="14">Sidi Bouzid</option>
        <option value="11">Siliana</option>
        <option value="15">Sousse</option>
        <option value="24">Tataouine</option>
        <option value="20">Tozeur</option>
        <option value="1">Tunis</option>
        <option value="6">Zaghouan</option>
      </select><br>
      <label for="Ville">Ville<em>*</em></label>
      <input id="Ville"  placeholder="Taper votre Ville"  required=""><br>
  </fieldset>
 

  <p><a href="H" class="btn btn-dark rounded-pill py-2 btn-block mt-2">SOUMETTRE</a></p>
</form>
<style>>
p {
  margin-top: 0px;
}
 
fieldset {
  margin-bottom: 15px;
  padding: 10px;
}
 
legend {
  padding: 0px 3px;
  font-weight: bold;
  font-variant: small-caps;
}
 
label {
  width: 110px;
  display: inline-block;
  vertical-align: top;
  margin: 6px;
}
 
em {
  font-weight: bold;
  font-style: normal;
  color: #f00;
}
 
input:focus {
  background: #eaeaea;
}
 
input, textarea {
  width: 249px;
}
 
textarea {
  height: 100px;
}
 
select {
  width: 254px;
}
 
input[type=checkbox] {
  width: 10px;
}
 
input[type=submit] {
  width: 150px;
  padding: 10px;
}

</style>
@endsection