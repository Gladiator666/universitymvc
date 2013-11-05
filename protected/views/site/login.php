<?php
    $degreeArray = array("Бакалавр", "Спеціаліст", "Магістр", "Аспірант", "Доцент", "Професор");
    $universityArray = array("КНУ імені Тараса Шевченка", "КПІ Національний технічний університет");
    $universitydepartmentArray = array("Інформаційно-обчислювальний центр", "Астрономічна обсерваторія", "Військовий інститут", "Географічний факультет", "Геологічний факультет", "Економічний факультет",
    "Інститут високих технологій", "Інститут міжнародних відносин", "Механіко-математичний факультет", "ННЦ «Інститут біології»", "Радіофізичний факультет", "Факультет кібернетики", "Фізичний факультет",
     "Хімічний факультет", "Юридичний факультет");
?>
	<form class="well span8">
        <div class="row">
            <div class="span3">
                <h1 class="registrateUsers">Реєстрація</h1>
                <label>First Name:</label> 
                <input class="span3" placeholder="Your First Name" type="text"> <label>Last Name</label>
                <input class="span3" placeholder="Your Last Name" type="text">
                
                <label>Email Address:</label> 
                <input class="span3" placeholder="Your email address" type="text">
                
                <label>Mobile Phone:</label> 
                <input class="span3" placeholder="Please input mobile phone" type="text"> 
                
                <label>Password:</label> 
                <input class="span3" placeholder="Please input password" type="password"> 
                
                <label>Repeat Password:</label> 
                <input class="span3" placeholder="Please Repeat Password" type="password">
                
            </div>
            
            <div class="span5">
                
                <label>Виший Навчальний Заклад:</label> 
                <select class="span3" id="subject" name="subject">
                    <option selected value="na">
                        Choose One:
                    </option>
    
                    <option value="service">
                        General Customer Service
                    </option>
    
                    <option value="suggestions">
                        Suggestions
                    </option>
    
                    <option value="product">
                        Product Support
                    </option>
                </select>
                
                <label>Назва Факультету:</label> 
                <select class="span3" id="subject" name="subject">
                    <option selected value="na">
                        Choose One:
                    </option>
    
                    <option value="service">
                        General Customer Service
                    </option>
    
                    <option value="suggestions">
                        Suggestions
                    </option>
    
                    <option value="product">
                        Product Support
                    </option>
                </select>
                
                <label>Інформація про освіту:</label> 
                <select class="span3" id="subject" name="subject">
                    <option selected value="na">
                        Choose One:
                    </option>
    
                    <option value="service">
                        General Customer Service
                    </option>
    
                    <option value="suggestions">
                        Suggestions
                    </option>
    
                    <option value="product">
                        Product Support
                    </option>
                </select>
            </div>
            <button class="btn btn-primary pull-right" type="submit">Send</button></div>
    </form>