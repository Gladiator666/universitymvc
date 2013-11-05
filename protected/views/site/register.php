<?php
    $degreeArray = array("Бакалавр", "Спеціаліст", "Магістр", "Аспірант", "Доцент", "Професор");
    $universityArray = array("КНУ імені Тараса Шевченка", "КПІ Національний технічний університет");
    $universitydepartmentArray = array("Інформаційно-обчислювальний центр", "Астрономічна обсерваторія", "Військовий інститут", "Географічний факультет", "Геологічний факультет", "Економічний факультет",
    "Інститут високих технологій", "Інститут міжнародних відносин", "Механіко-математичний факультет", "ННЦ «Інститут біології»", "Радіофізичний факультет", "Факультет кібернетики", "Фізичний факультет",
     "Хімічний факультет", "Юридичний факультет");
?>
<form action = "login.php" method = "post" name = "form" class="register">
            	<h1 class="registrateUsers">Реєстрація</h1>
            	<fieldset class="row1">
            		<legend>Деталі Акаунта
            		</legend>
					<p>
            			<label>ПІБ*
            			</label>
            			<input type="text" name="namefirst" class="long"/>
            		</p>
					<p>
            			<label>Телефон* +38
            			</label>
            			<input type="text" name="phonenumber" maxlength="10"/>
            		</p>
            		<p>
            			<label>Email*
            			</label>
            			<input type="text" name="email" />
					</p>
					<p>
            			<label>Пароль*
            			</label>
            			<input type="password" name="password" />
            		</p>
            		<p>
            			<label>Повторіть Пароль*
            			</label>
            			<input type="password" name="repassword" />
					</p>
            	</fieldset>
            	<fieldset class="row2">
            		<legend>Персональні дані
            		</legend>
                    <p>
                      <label>Навчальний заклад*
                      </label>
                      <select  name="univ" id="selectuniv">
                        <?php
                        for($i = 0; $i<=count($universityArray); $i++) {
                         echo '<option value = "'.$i.'"/>' .$universityArray[$i]."<br>";
                         }
                        ?>
                      </select>
                     </p>
                      <p>
                      <label>Назва факультету*
                      </label>
                      <select  name="univdepartment" id="selectunivdepartment">
                        <?php
                        for($i = 0; $i<=count($universitydepartmentArray); $i++) {
                         echo '<option value = "'.$i.'"/>' .$universitydepartmentArray[$i]."<br>";
                         }
                        ?>
                      </select>
                     </p>
					 <p>
						 <label>Інформація про освіту*
						</label>
						<select name="degree" id="selectdegree">
                        <?php
                        for($i = 0; $i<=count($degreeArray); $i++) {
                         echo '<option value = "'.$i.'"/>' .$degreeArray[$i]."<br>";
                         }
                         ?>
                      </select>
					</p>
            	<fieldset class="captcha">
                    <legend>Капча*</legend>
                    <input name="pkey" type="text"> <br /><img src="captcha/captcha.php">
                </fieldset>
                </fieldset>
                <div class="buttonreg">
                    <input type="submit" value="Реєстрація" name="button">
                </div>
             </form>