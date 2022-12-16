<!--{*
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2014 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */
*}-->
<style>
.infos .col-md-6{
  margin: 1rem 0;
  padding: 10px;
}
.row img{
  display: block;
  width: 90%;
}
.contacts{
  padding:1rem 3.3rem;
}
.contacts p{
  margin:6px 0;
}
.contacts .row{
  background-color:#f1f1f6;
  font-size:10px;
  margin:0 auto 9px;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
<script src="https://kit.fontawesome.com/8f44b5795a.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div id="undercolumn">
  <div id="undercolumn_aboutus">
    <!--{*<h2 class="title" style="text-align: center;"><!--{$tpl_title|h}--></h2>*}-->
    <div style="width: 540px; margin: 0 auto;line-height:130%">
      <img src="{$banner}" alt="" style="display: block; width: 100%;" />
      
      <p style="margin: 15px 20px 10px;">
      {$intro}
      </p>
      
    <div class="infos">
    
<!--row1-->
    <div class="row">
        <div class="col-md-6">
          <img src="{$img01}" alt="" style="display: block; width: 90%;"/>
        </div>
        <div class="col-md-6">
          <p>{$desc01}</p>
        </div>
      </div>

<!--row2-->
      <div class="row">
        <div class="col-md-6">
        <p>{$desc02}</p>
      </div>
        <div class="col-md-6">
          <img src="{$img02}" alt="" style="display: block; width: 90%;"/>
        </div>
      </div>
<!--row3-->
      <div class="row">
        <div class="col-md-6">
         <img src="{$img03}" alt="" style="display: block; width: 90%;"/>
        </div>
        <div class="col-md-6">
          <p>{$desc03}</p>
        </div>
      </div>
<!--row4-->
      <div class="row" style="{if !isset($img04)}display:none{/if}">
        <div class="col-md-6">
            <p>{$desc04}</p>
        </div>
        <div class="col-md-6">
            <img src="{$img04}" alt="" style="display: block; width: 90%;"/>
        </div>
      </div>
    </div>
      
<!--contact info-->
      <div style="background-color:#e8e4ec;margin-bottom:2rem;">
      <h6 style="text-align: center;padding:10px 0;font-family:'游明朝';margin-bottom:0;">企業情報</h6>
      <img src="{$co}" alt="" style="display: block; margin:auto;width: 80%;height:auto;"/>
        
        <div class="contacts">
        
        <div class="row">
          <div class="col-md-3">
          <p><i class="fa-solid fa-house-user"></i>
          　企業名</p></div>
          <div class="col-md-9"><p> |
          　　{$company}</p></div>
        </div>

        <div class="row">
          <div class="col-md-3">
          <p><i class="fa-solid fa-phone"></i>
          　電話番号</p></div>
          <div class="col-md-9"><p> |
          　　<a href="tel:{$phone}">{$phone}</a></p></div>
        </div>

        <div class="row">
          <div class="col-md-3">
          <p><i class="fa-solid fa-house-user"></i>
          　住所</p></div>
          <div class="col-md-9"><p> |
          　　{$address}</p></div>
        </div>

        <div class="row" style="{if !isset($homepage)}display:none{/if}">
          <div class="col-md-3">
          <p style="font-size: 9px;"><i class="fa-solid fa-house-user"></i>
          　ホームページ</p></div>
          <div class="col-md-9"><p> |
          　　<a href="{$homepage}">
          {$homepage}</a></p></div>
        </div>

        <div class="row" style="{if !isset($instagram)}display:none{/if}">
          <div class="col-md-3">
          <p><i class="fa-solid fa-house-user"></i>
          　Instagram</p></div>
          <div class="col-md-9"><p> |
          　　<a href="{$instagram}">
          {$instagram}</a></p></div>
        </div>
      
      
        <div class="row" style="{if !isset($facebook)}display:none{/if}">
          <div class="col-md-3">
          <p><i class="fa-solid fa-house-user"></i>
          　Facebook</p></div>
          <div class="col-md-9"><p> |
          　　<a href="{$facebook}">
          {$facebook}</a></p></div>
        </div>


        <div class="row" style="{if !isset($twitter)}display:none{/if}">
          <div class="col-md-3">
          <p><i class="fa-solid fa-house-user"></i>
          　Twitter</p></div>
          <div class="col-md-9"><p> |
          　　<a href="{$twitter}">
          {$twitter}</a></p></div>
        </div>


        <div class="row" style="{if !isset($line)}display:none{/if}">
          <div class="col-md-3">
          <p><i class="fa-solid fa-house-user"></i>
          　Line</p></div>
          <div class="col-md-9"><p> |
          　　<a href="{$line}">
          {$line}</a></p></div>
        </div>
        
        </div>
      </div>

    </div>
  </div>
</div>
