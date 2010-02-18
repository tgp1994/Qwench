<h1><?php echo $user['name'];?></h1>

<h3>Points: <?php echo $user['points'];?></h3>


        <table style="width:960px" class="vcard">
            <tr>
                <!--cell-->
                <td style="vertical-align:top; width:170px">
                    <table>
                        <tr>
                            <td style="padding:20px 20px 8px 20px">
                                <div style="float:left"><img src="http://www.gravatar.com/avatar/<?php echo md5(trim(strtolower($user['email'])));?>?d=identicon&s=128" style="border:1px solid #ccc">
                            </td>

                        </tr>
                        <tr>
                            <td class="summaryinfo">
                                <div class="summarycount"><?php echo $user['points'];?></div>
                                <div style="margin-top:5px; font-weight:bold">reputation</div>
                              
                            </td>
                        </tr>
                        <tr style="height:30px">

                            <td class="summaryinfo" style="vertical-align:bottom">17 views <?php //echo $user['view'];?></td>
                        </tr>
                        
                    </table>
                </td>
                <!--cell-->
                <td style="vertical-align: top; width:350px">
                    <div style="float: right; margin-top: 19px; margin-right: 4px">
                        
                    </div>

                    <h2 style="margin-top:20px">Registered User</h2>
                    <table class="user-details">
                        <tr>
                            <td style="width:120px">name</td>
                            <td style="width:230px" class="fn nickname"><b><?php echo $user['name'];?></b></td>
                        </tr>
                        <tr>

                            <td>member for</td>
                            <td><span class="cool" title="2008-11-12 19:23:01Z"><?php echo timeAgo(strtotime($user['created']));?></span></td>
                        </tr>
                        <tr>
                            <td>seen</td>
                            <td><span class="cool"><span title="2010-01-15 12:42:32Z" class="relativetime">  
                            <?php echo timeAgo(strtotime($user['lastactivity']));?>
                            </span></span></td>
                        </tr>

                        
                        <tr>
                            <td>website</td>
                            <td>
                                <div class="no-overflow"><a href="<?php echo $user['website'];?>" rel="nofollow me" class="url"><?php echo $user['website'];?></a></div>                                
                            </td>
                        </tr>
                        
                        <tr>
                            <td>location</td>

                            <td class="label adr">
                                
                            </td>
                        </tr>
                        <tr>
                            <td>age</td>
                            <td>
                                
                            </td>
                        </tr>

                        
                    </table>
                </td>
                <!--cell-->
                <td style="width:390px">
                    <div id="user-about-me" class="note"></div>
                    
                </td>
            </tr>
        </table>



