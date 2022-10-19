<!DOCTYPE html>
<html>
    <head>
        <title>TTC-Register Form</title>
        <link rel="stylesheet" type="text/css" href="../css/rejindex.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-left" style="font-size: 40px; margin-top: 100px;">Travel Through ceylon</h1>
                    <p class="text-left"  style="font-size: 17px;">
                        Sri Lanka is an island country located off the southern coast of India. 
                        Sri Lanka is surrounded by the Indian Ocean, Gulf of Mannar, the Palk Strait, and lies in the vicinity of India and the Maldives.
                        The geography of Sri Lanka includes coastal plains in the north and hills and mountains in the interior.
                        Sri Lanka is a beautiful, exotic destination full of culture, nature, wildlife, and smiling faces. For a country with such a violent (and recently so, at that) history, the island is actually home to some of the friendliest people out there.
                    </p>
                </div>
                
                <div class="col-md-5" style="margin-top: 80px; box-shadow: -1px 1px 60px 10px black; background: rgb(0,0,0,0.4);">
                    <!--make a 2 colum of 6-->
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="test-left" style="font-size: 25px;">Registration Form</h3>
                        </div>
                        <div class="col-md-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16" style="float: right; margin-top: 20px; font-size: 35px;">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                              </svg>
                        </div>
                        <hr>
                        <form action="../php/regi.php" method="POST">
                        <div class="row">
                            <label class="label col-md-2 control-label" style="font-weight: normal;margin-top: 17px;font-size: 17px;">Name</label>
                            <div class="col-md-10">
                                <input type="Uname" class="form-control" style="background: transparent; border-radius: 0px; border: 0px; border-bottom: 1px solid;" name="Name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="label col-md-2 control-label" style="font-weight: normal;margin-top: 17px;font-size: 17px;">E-mail</label>
                            <div class="col-md-10">
                                <input type="Email" class="form-control" style="background: transparent; border-radius: 0px; border: 0px; border-bottom: 1px solid;" name="Email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="label col-md-2 control-label" style="font-weight: normal;margin-top: 17px;font-size: 17px;">Password</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" style="background: transparent; border-radius: 0px; border: 0px; border-bottom: 1px solid; " name="Password" placeholder="Password"required>
                                <input type="checkbox"><small>Remember me</small>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px;">
                            <label class="label col-md-2 control-label" style="font-weight: normal;font-size: 17px;">Country</label>
                            <div class="col-md-10">
                                <select class="form-control" style="background: transparent; border-radius: 0px; border: 0px; border-bottom: 1px solid;" name="Country"  placeholder="Country" required>
                                    <option>Afghanistan	</option>
                                    <option>Albania	</option>
                                    <option>Algeria	</option>
                                    <option>Andorra	</option>
                                    <option>Angola	</option>
                                    <option>Antigua and Barbuda	</option>
                                    <option>Argentina	</option>
                                    <option>Armenia	</option>
                                    <option>Australia	</option>
                                    <option>Austria</option>
                                    <option>Azerbaijan	</option>
                                    <option>Bahamas	</option>
                                    <option>Bahrain</option>
                                    <option>Bangladesh	</option>
                                    <option>Barbados	</option>
                                    <option>Belarus	</option>
                                    <option>Belgium</option>
                                    <option>Belize	</option>
                                    <option>Benin	</option>
                                    <option>Bhutan	</option>
                                    <option>Bolivia	</option>
                                    <option>Bosnia and Herzegovina	</option>
                                    <option>Botswana	</option>
                                    <option>Brunei	</option>
                                    <option>Bulgaria	</option>
                                    <option>Burkina Faso	</option>
                                    <option>Burundi</option>
                                    <option>Côte d'Ivoire	</option>
                                    <option>Cabo Verde	</option>
                                    <option>Cambodia	</option>
                                    <option>Cameroon	</option>
                                    <option>Canada	</option>
                                    <option>Central African Republic</option>	
                                    <option>Chad	</option>
                                    <option>Chile	</option>
                                    <option>China	</option>
                                    <option>Colombia	</option>
                                    <option>Comoros	</option>
                                    <option>Congo (Congo-Brazzaville)</option>	
                                    <option>costa Rica	</option>
                                    <option>Croatia	</option>
                                    <option>Cuba	</option>
                                    <option>Cyprus	</option>
                                    <option>Czechia (Czech Republic)	</option>
                                    <option>Democratic Republic of the Congo	</option>
                                    <option>Djibouti	</option>
                                    <option>Dominica	</option>
                                    <option>Dominican Republic</option>	
                                    <option>Ecuador	</option>
                                    <option>Egypt	</option>
                                    <option>El Salvador	</option>
                                    <option>Equatorial Guinea</option>	
                                    <option>Eritrea	</option>
                                    <option>Estonia	</option>
                                    <option>Eswatini (fmr. "Swaziland")</option>	
                                    <option>Ethiopia	</option>
                                    <option>Fiji	</option>
                                    <option>Finland	</option>
                                    <option>France	</option>
                                    <option>Gabon	</option>
                                    <option>Gambia	</option>
                                    <option>Georgia	</option>
                                    <option>Germany	</option>
                                    <option>Ghana	</option>
                                    <option>Greece	</option>
                                    <option>Grenada	</option>
                                    <option>Guatemala	</option>
                                    <option>Guinea	</option>
                                    <option>Guinea-Bissau	</option>
                                    <option>Guyana	</option>
                                    <option>Haiti	</option>
                                    <option>Holy See	</option>
                                    <option>Honduras	</option>
                                    <option>Hungary	</option>
                                    <option>Iceland	</option>
                                    <option>India	</option>
                                    <option>Indonesia	</option>
                                    <option>Iran	</option>
                                    <option>Iraq	</option>
                                    <option>Ireland	</option>
                                    <option>Israel	</option>
                                    <option>Italy	</option>
                                    <option>Jamaica	</option>
                                    <option>Japan		</option>
                                    <option>Jordan		</option>
                                    <option>Kazakhstan	</option>
                                    <option>Kenya	</option>
                                    <option>Kiribati	</option>
                                    <option>Kuwait	</option>
                                    <option>Kyrgyzstan	</option>
                                    <option>Laos	</option>
                                    <option>Latvia	</option>
                                    <option>Lebanon	</option>
                                    <option>Lesotho	</option>
                                    <option>Liberia	</option>
                                    <option>Libya	</option>
                                    <option>Liechtenstein	</option>
                                    <option>Lithuania	</option>
                                    <option>Luxembourg	</option>
                                    <option>Madagascar	</option>
                                    <option>Malawi	</option>
                                    <option>Malaysia</option>
                                    <option>Maldives	</option>
                                    <option>Mali	</option>
                                    <option>Malta	</option>
                                    <option>Marshall Islands	</option>
                                    <option>Mauritania	</option>
                                    <option>Mauritius	</option>
                                    <option>Mexico	</option>
                                    <option>Micronesia	</option>
                                    <option>Moldova	</option>
                                    <option>Monaco	</option>
                                    <option>Mongolia </option>
                                    <option>Montenegro	</option>
                                    <option>Morocco	</option>
                                    <option>Mozambique	</option>
                                    <option>Myanmar (formerly Burma)</option>	
                                    <option>Namibia	</option>
                                    <option>Nauru	</option>
                                    <option>Nepal	</option>
                                    <option>Netherlands	</option>
                                    <option>New Zealand	</option>
                                    <option>Nicaragua	</option>
                                    <option>Niger	</option>
                                    <option>Nigeria	</option>
                                    <option>North Korea	</option>
                                    <option>North Macedonia	</option>
                                    <option>Norway	</option>
                                    <option>Oman	</option>
                                    <option>Pakistan</option>
                                    <option>Palau	</option>
                                    <option>Palestine State</option>
                                    <option>Panama	</option>
                                    <option>Papua New Guinea	</option>
                                    <option>Paraguay	</option>
                                    <option>Peru</option>
                                    <option>Philippines	</option>
                                    <option>Poland</option>
                                    <option>Portugal	</option>
                                    <option>Qatar</option>
                                    <option>Romania	</option>
                                    <option>Russia	</option>
                                    <option>Rwanda	</option>
                                    <option>Saint Kitts and Nevis	</option>
                                    <option>Saint Lucia	</option>
                                    <option>Saint Vincent and the Grenadines</option>	
                                    <option>Samoa	</option>
                                    <option>San Marino	</option>
                                    <option>Sao Tome and Principe	</option>
                                    <option>Saudi Arabia	</option>
                                    <option>Senegal	</option>
                                    <option>Serbia	</option>
                                    <option>Seychelles	</option>
                                    <option>Sierra Leone	</option>
                                    <option>Singapore	</option>
                                    <option>Slovakia</option>
                                    <option>Slovenia	</option>
                                    <option>Solomon Islands	</option>
                                    <option>Somalia	</option>
                                    <option>South Africa	</option>
                                    <option>South Korea	</option>
                                    <option>South Sudan</option>
                                    <option>Spain</option>
                                    <option>Sri Lanka</option>
                                    <option>Sudan	</option>
                                    <option>Suriname</option>
                                    <option>Sweden	</option>
                                    <option>Switzerland</option>
                                    <option>Syria	</option>
                                    <option>Tajikistan	</option>
                                    <option>Tanzania</option>
                                    <option>Thailand	</option>
                                    <option>Timor-Lest</option>
                                    <option>Togo	</option>
                                    <option>Tonga	</option>
                                    <option>Trinidad and Tobago</option>	
                                    <option>Tunisia	</option>
                                    <option>Turkey</option>
                                    <option>Turkmenistan	</option>
                                    <option>Tuvalu	</option>
                                    <option>Uganda	</option>
                                    <option>Ukraine</option>
                                    <option>United Arab Emirates	</option>
                                    <option>United Kingdom	</option>
                                    <option>United States of America</option>	
                                    <option>Uruguay	</option>
                                    <option>Uzbekistan	</option>
                                    <option>Vanuatu	</option>
                                    <option>Venezuela	</option>
                                    <option>Vietnam</option>
                                    <option>Yemen	</option>
                                    <option>Zambia	</option>
                                    <option>Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <input type="submit" src="Home.html" class="btn btn-info"style="margin-left: 100px; margin-top: 20px;"  >
                        <a href="#"><div class="btn btn-warning" style="margin-left: 300px;margin-top: -50px; margin-bottom: 5px;">Cancel</div></a>
                    </form>
                    </div>
                    <a href="../html/signup.html"><center>If you already have account:-Sign In</center></a>
                </div>
            </div>
        </div> 
    </body>
</html>