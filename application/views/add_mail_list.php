<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo form_open_multipart('mailer/update_mail_list');

echo form_label('csv'). form_upload('csv').'<br>';
echo form_submit('submit','add').  form_close();
