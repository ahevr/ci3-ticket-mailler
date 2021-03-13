<!DOCTYPE html>
<html lang="tr">
<head>

    <?php $this->load->view("include/head");?>

</head>
<body>
<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" action="<?php echo base_url("welcome/sendToEmail");?>" method="post" enctype="multipart/form-data">
				<span class="contact100-form-title">
					Ege Sedef Aydınlatma <br> Destek Paneli
				</span>
            <?php

            if($this->session->flashdata("message")) {
                echo "
                <div class='col-md-12 alert alert-success'>
                  ".$this->session->flashdata("message")."
                </div>
                ";
            }
            ?>
            <div class="wrap-input100 validate-input bg1" data-validate="Lütfen Adınızı Giriniz">
                <span class="label-input100">Adınız Soyadınız *</span>
                <input class="input100" type="text" name="name" placeholder="Ad ve Soyad Bilgileriniz">
            </div>

            <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Eposta adresinizi giriniz (e@a.x)">
                <span class="label-input100">E-mail Adresiniz *</span>
                <input class="input100" type="text" name="email" placeholder="E Posta Adresiniz ">
            </div>

            <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Telefon Numarasını Girin">
                <span class="label-input100">Telefon No *</span>
                <input class="input100" type="text" name="phone" placeholder="Telefon Numaranız ">
            </div>

            <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Adres Bilgilerinizi Girin">
                <span class="label-input100">Adres</span>
                <textarea class="input100" name="address" placeholder="Açık Adresiniz..."></textarea>
            </div>

            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Ürünü Aldığınız Site *</span>
                <div>
                    <select class="js-select2" name="service">
                        <option>Lütfen Satın Aldığınız Siteyi Seçin</option>
                        <option>Hepsiburada</option>
                        <option>Trendyol</option>
                        <option>N11</option>
                        <option>Vivense</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Sipariş Numarası</span>
                <input class="input100" type="text" name="order" placeholder="Sipariş Numaranızı Giriniz">
            </div>

            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Fatura Numarası</span>
                <input class="input100" type="text" name="fatura" placeholder="Fatura Numaranızı Giriniz">
            </div>

            <div class="wrap-input100 validate-input bg1">
                <span class="label-input100">Ürün Adı</span>
                <input class="input100" type="text" name="product" placeholder="Ürün Adını Giriniz">
            </div>

            <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Lütfen Şikayetinizi Yazın">
                <span class="label-input100">Konu</span>
                <textarea class="input100" name="message" placeholder="Şikayetiniz Hakkında Detaylı Açıklama..."></textarea>
            </div>

            <div class="wrap-input100 validate-input bg1 mr-1">
                <span class="label-input100">Görsel Yükle</span>
                <br>
                <input type="file" id="exampleInputFile"  name="attachment" multiple="multiple" accept=".jpg,.pdf,.png"
            </div>



            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
						<span>
							Gönder
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                </button>
            </div>




        </form>
    </div>
</div>

<?php $this->load->view("include/include_script");?>



</body>
</html>
