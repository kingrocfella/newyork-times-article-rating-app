<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Expense Application</title>
      <style type="text/css">
         /* Client-specific Styles */
         #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
         body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
         /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
         .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
         .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing. */
         #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
         img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
         a img {border:none;}
         .image_fix {display:block;}
         p {margin: 0px 0px !important;}
         table td {border-collapse: collapse;}
         table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
         a {color: #33b9ff;text-decoration: none;text-decoration:none!important;}
         /*STYLES*/
         table[class=full] { width: 100%; clear: both; }
         /*IPAD STYLES*/
         @media only screen and (max-width: 640px) {
         a[href^="tel"], a[href^="sms"] {
         text-decoration: none;
         color: #0a8cce; /* or whatever your want */
         pointer-events: none;
         cursor: default;
         }
         .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
         text-decoration: default;
         color: #0a8cce !important;
         pointer-events: auto;
         cursor: default;
         }
         table[class=devicewidth] {width: 440px!important;text-align:center!important;}
         table[class=devicewidthmob] {width: 420px!important;text-align:center!important;}
         table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
         img[class=banner] {width: 440px!important;height:157px!important;}
         img[class=col2img] {width: 440px!important;height:330px!important;}
         table[class="cols3inner"] {width: 100px!important;}
         table[class="col3img"] {width: 131px!important;}
         img[class="col3img"] {width: 131px!important;height: 82px!important;}
         table[class='removeMobile']{width:10px!important;}
         img[class="blog"] {width: 420px!important;height: 162px!important;}
         }

         /*IPHONE STYLES*/
         @media only screen and (max-width: 480px) {
         a[href^="tel"], a[href^="sms"] {
         text-decoration: none;
         color: #0a8cce; /* or whatever your want */
         pointer-events: none;
         cursor: default;
         }
         .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
         text-decoration: default;
         color: #0a8cce !important; 
         pointer-events: auto;
         cursor: default;
         }
         table[class=devicewidth] {width: 280px!important;text-align:center!important;}
         table[class=devicewidthmob] {width: 260px!important;text-align:center!important;}
         table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
         img[class=banner] {width: 280px!important;height:100px!important;}
         img[class=col2img] {width: 280px!important;height:210px!important;}
         table[class="cols3inner"] {width: 260px!important;}
         img[class="col3img"] {width: 280px!important;height: 175px!important;}
         table[class="col3img"] {width: 280px!important;}
         img[class="blog"] {width: 260px!important;height: 100px!important;}
         td[class="padding-top-right15"]{padding:15px 15px 0 0 !important;}
         td[class="padding-right15"]{padding-right:15px !important;}
         }
      </style>
   </head>
   <body>
  <!-- Start of preheader -->
<table width="100%" bgcolor="#f4f4f4" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="preheader" >
   <tbody>
      <tr>
         <td>
            <table width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                           <tbody>
                              <!-- Spacing -->
                              <tr>
                                 <td width="100%" height="10"></td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td align="center" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 10px;color: #016B5A;text-align:center;" st-content="viewonline"> 
                                    <!-- <a href="#" style="text-decoration: none; color: #7a6e67">view online</a>  -->
                                 </td>
                                 <!-- Spacing -->
                              </tr>
                              <tr>
                                 <td width="100%" height="10"></td>
                              </tr>
                              <!-- Spacing -->
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- End of preheader -->      
<!-- Start of header -->
<table width="100%" bgcolor="#f4f4f4" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="header">
   <tbody>
      <tr>
         <td>
            <table width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table bgcolor="#dbdbdb" width="560" cellpadding="0" cellspacing="0" border="0" align="center" style="border-top-left-radius:5px;border-top-right-radius:5px;" class="devicewidth">
                           <tbody>
                              <!-- Spacing -->
                              <tr>
                                 <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td>
                                    <!-- logo -->
                                    <table width="194" align="left" border="0" cellpadding="0" cellspacing="0">
                                       <tbody>
                                          <tr>
                                             <td width="20"></td>
                                             <td width="174" height="60" align="left">
                                                <div class="imgpop">
                                                   <a target="_blank" href="https://vfdgroup.com/">
                                                   <img src="http://localhost/Expense Management/frontend/src/favicon/favicon-32x32.png" alt="" border="0" width="32" height="32" style="display:block; border:none; outline:none; text-decoration:none;">
                                                   </a>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <!-- end of logo -->
                                 </td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                              </tr>
                              <!-- Spacing -->
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- End of Header --> 

<!-- fulltext -->
<table width="100%" bgcolor="#f4f4f4" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="left-image">
   <tbody>
      <tr>
         <td>
            <table width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table bgcolor="#ffffff" width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                           <tbody>
                              <!-- Spacing -->
                              <tr>
                                 <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td>
                                    <table width="520" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidthinner">
                                       <tbody>
                                          <!-- Spacing -->
                                          <tr>
                                             <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                          </tr>
                                          <tr>
                                             <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #016B5A; text-align:left; line-height: 24px;">
                                                Entity Expense Allocation Notification.
                                             </td>
                                          </tr>
                                          <!-- Spacing -->
                                          <tr>
                                             <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                          </tr>
                                          <!-- /Spacing -->
                                          <!-- content -->
                                          <tr>
                                             <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #444444; text-align:left; line-height: 24px;">

                                                Dear All, <br><br>

                                                An expense raised by {{$Initiator}} has passed through the neccesary approval levels.<br>
                                                Please see below a tabular representation of the entity allocation for the expense.

                                             </td>
                                          </tr>
                                          <tr>
                                             <td align="center" style="padding:20px 0;">
                                                <table cellspacing="0" cellpadding="0" class="card">
                                                  <tr>
                                                    <td style="background-color:#016B5A; text-align:center; padding:10px; color:white; font-family: Helvetica, arial, sans-serif; ">
                                                      EXPENSE ALLOCATION DETAILS
                                                    </td>
                                                   </tr>
                                                   <tr style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #444444; text-align:left; line-height: 24px;">
                                                      <td style="border:1px solid green;">
                                                         <table cellspacing="0" cellpadding="20" width="100%">
                                                           <tr>
                                                             <td>
                                                               <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#fff" >
                                                                 <tr>
                                                                   <td width="150" class="data-heading" style="text-align:justify;">
                                                                     Name of Initiator:
                                                                   </td>
                                                                   <td class="data-value" style="text-align:justify;">
                                                                     {{$Initiator}}
                                                                   </td>
                                                                 </tr>
                                                                 @if($AAM != 0)
                                                                 <tr>
                                                                   <td width="150" class="data-heading" style="text-align:justify;">
                                                                     AAM Allocation:
                                                                   </td>
                                                                   <td class="data-value" style="text-align:justify;">
                                                                     &#8358;{{$AAM}}
                                                                   </td>
                                                                 </tr>
                                                                 @endif
                                                                 @if($VB != 0)
                                                                 <tr>
                                                                   <td width="150" class="data-heading" style="text-align:justify;">
                                                                     VB Allocation:
                                                                   </td>
                                                                   <td class="data-value" style="text-align:justify;">
                                                                     &#8358;{{$VB}}
                                                                   </td>
                                                                 </tr>
                                                                 @endif
                                                                 @if($VM != 0)
                                                                 <tr>
                                                                   <td width="150" class="data-heading" style="text-align:justify;">
                                                                     VM Allocation:
                                                                   </td>
                                                                   <td class="data-value" style="text-align:justify;">
                                                                     &#8358;{{$VM}}
                                                                   </td>
                                                                 </tr>
                                                                 @endif
                                                                 @if($Group != 0)
                                                                 <tr>
                                                                   <td width="150" class="data-heading" style="text-align:justify;">
                                                                     Group Allocation:
                                                                   </td>
                                                                   <td class="data-value" style="text-align:justify;">
                                                                     &#8358;{{$Group}}
                                                                   </td>
                                                                 </tr>
                                                                 @endif
                                                                 @if($ssGroup != 0)
                                                                 <tr>
                                                                   <td width="150" class="data-heading" style="text-align:justify;">
                                                                     Group Allocation:
                                                                   </td>
                                                                   <td class="data-value" style="text-align:justify;">
                                                                     &#8358;{{$ssGroup}}
                                                                   </td>
                                                                 </tr>
                                                                 @endif
                                                                 @if($Everdon != 0)
                                                                 <tr>
                                                                   <td width="150" class="data-heading" style="text-align:justify;">
                                                                     Everdon Allocation:
                                                                   </td>
                                                                   <td class="data-value" style="text-align:justify;">
                                                                     &#8358;{{$Everdon}}
                                                                   </td>
                                                                 </tr>
                                                                 @endif
                                                               </table>
                                                             </td>
                                                           </tr>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </table>
                                             </td>
                                          </tr>
                                          <!-- end of content -->
                                           <!-- RESPOND Button -->
                                          <tr>
                                            <td>
                                              <table width="210" border="0" cellspacing="0" cellpadding="0" align="center">
                                                <tr>
                                                  <td align="center" bgcolor="#ededed">
                                                    <table border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                        <td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="15"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="50" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>
                                                        </td>

                                                          <td bgcolor="#ededed" align="center">
                                                            <div class="text-btn" style="color:#ffffff; font-family:Arial, sans-serif; min-width:auto !important; font-size:16px; line-height:45px; text-align:center ">
                                                              <a href="http://localhost:8080/login" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none"><span class="link-white" style="color:#ED1D24; text-decoration:none;  font-weight: 600;">LOGIN</span></a>
                                                            </div>
                                                          </td>
                                                        <td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="15"></td>
                                                      </tr>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>  
                                          <!-- RESPOND Button -->
                          
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                              </tr>
                              <!-- Spacing -->
                              <!-- Spacing -->
                              <tr>
                                 <td height="5" bgcolor="#016B5A" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                              </tr>
                              <!-- Spacing -->
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- end of fulltext -->
<!-- Start of footer -->
<table width="100%" bgcolor="#f4f4f4" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="footer">
   <tbody>
      <tr>
         <td>
            <table width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table bgcolor="#f4f4f4" width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                           <tbody>
                              <!-- Spacing -->
                              <tr>
                                 <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td>
                                    <!-- start of social icons -->
                                    <table width="60" height="40" align="center" vaalign="middle"  border="0" cellpadding="0" cellspacing="0">
                                       <tbody>
                                          <tr>
                                             <td width="22" height="22" align="left">
                                                <div class="imgpop">
                                                   <a target="_blank" href="https://www.facebook.com/VFDGroup/">
                                                   <img src="img/facebook.png" alt="" border="0" width="22" height="22" style="display:block; border:none; outline:none; text-decoration:none; color: #016B5A;">
                                                   </a>
                                                </div>
                                             </td>
                                             <td align="left" width="10" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                             <td width="22" height="22" align="right">
                                                <div class="imgpop">
                                                   <a target="_blank" href="https://twitter.com/VFDGroup">
                                                   <img src="img/twitter.png" alt="" border="0" width="22" height="22" style="display:block; border:none; outline:none; text-decoration:none;">
                                                   </a>
                                                </div>
                                             </td>
                                             <td align="left" width="20" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <!-- end of social icons -->
                                 </td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                              </tr>
                              <!-- Spacing -->
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- End of footer -->
<!-- Start of postfooter -->
<table width="100%" bgcolor="#f4f4f4" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="preheader" >
   <tbody>
      <tr>
         <td>
            <table width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table bgcolor="#ffffff" width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                           <tbody>
                              <!-- Spacing -->
                              <tr>
                                 <td width="100%" height="10"></td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td align="center" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 13px;color: #7a6e67;text-align:center;" st-content="viewonline">
                                    Developed by IT Dev. Team.  
                                    <a href="https://vfdgroup.com/" style="text-decoration: none; color: #303030">&copy; 2018 VFD Group.</a> 
                                 </td>
                              </tr>
                                 <!-- Spacing -->
                              <tr>
                                 <td width="100%" height="10"></td>
                              </tr>
                              <!-- Spacing -->
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- End of postfooter -->

   </body>
   </html>