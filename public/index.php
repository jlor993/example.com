<?php

$meta=[];
$meta['title']="Hello, I am Jeffrey Lor";
$meta['description']="Jeffrey Lor Welcome Page Des Plaines";
$meta['keywords']="Jeffrey, Lor, welcome, webdesign, development, web developer, Des Plaines";

$content=<<<EOT
  <body>    
      <h1>Hello, I am Jeffrey Lor</h1>
      <p>
          <img class="avatar" src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm&s=64" alt="Jeffrey Lor">
          I'm 23 years old and am trying to kickstart my career in Computer Science. I live in the Des Plaines area. My hobbies include rhythm and card games. This page is currently bare bones and lacking, but I am in the process of learning to make it better.
      </p>
  </body>
EOT;

require '../core/layout.php';