<?php

$meta=[];
$meta['title']="Jeffrey Lor Resume";
$meta['description']="Jeffrey Lor's Resume";
$meta['keywords']="Jeffrey, Lor, resume, certifications, experience, education";

$content=<<<EOT
  <main>
    <section>
      <h1>Jeffrey Lor</h1>
      <div class="center">
        <a href="https://www.linkedin.com/in/jeffrey-lor-72434a123/" target="_blank" rel="noopener">LinkedIn</a>
        &#x25CF;
        Des Plaines, IL
      </div>
    </section>
    
    <section>
      <h2>Full Stack Web and Mobile Developer</h2>
      <p>Web and Software Developer practiced in multiple programming languages including Java and C. Has experience creating full stack applications using JavaScript and HTML.</p>
      <ul class="point">
        <li>Received training through the Software Development Lifecycle and worked on multiple projects within a team.</li>
        <li>Hardworking and good at managing time; can deliver good work in a timely manner.</li>
      </ul>
    </section>

    <section>
      <h3 id="minor-info">Core Competencies</h3>
      <table id="condensed-table">
        <tr>
          <td class="left">Full Stack Development</td>
          <td class="right">Hybrid Mobile Development</td>
        </tr>
        <tr>
          <td class="left">Front End Development</td>
        </tr>
      </table>
    </section>

    <section>
      <h2>Certifications and Technical Proficiencies</h2>
      <h3>Certifications</h3>
      <ul class="point">
        <li>Agile Certified ScrumMaster</li>
        <li>Oracle Certified Associate</li>
        <li>Pega Certified Senior System Architect</li>
      </ul>
      <h3>Tools</h3>
      <p class="listed-items">VS Code, SSH, Git</p>
      <h3>Languages</h3>
      <p class="listed-items">Java, C#, C, HTML, CSS, SASS, SQL, Python, Haskell, Pega</p>
    </section>
    
    <section>
      <h2>Professional Experience</h2>
      <table>
        <tr>
          <td class="left"><h3>Revature Associate</h3></td>
          <td class="right">2020</td>
        </tr>
        <tr>
          <td class="bullet">Received training in making full-stack Java applications and received an OCA certification.</td>
        </tr>
        <tr>
          <td class="bullet">Received CSA and CSSA certifications in Pega.</td>
        </tr>
      </table>
      </br>
      <table>
        <tr>
          <td class="left"><h3>CS 116 + 201 Teaching Assistant</h3></td>
          <td class="right">2017-2020</td>
        </tr>
        <tr>
          <td class="bullet">Reviewed and explained advanced elements of object-oriented programming, specifically Java.</td>
        </tr>
        <tr>
          <td class="bullet">Described dynamic data structures, searching and sorting algorithms, and object-oriented programming techniques.</td>
        </tr>
        <tr>
          <td class="bullet">Gave insight to students on how to properly use a debugger and how to apply it to their own code.</td>
        </tr>
      </table>
    </section>

    <section>
      <h2>Education</h2>
      <table>
        <tr>
          <td class="left">Illinois Institute of Technology — Chicago, IL</td>
          <td class="right">2016-2020</td>
        </tr>
        <tr>
          <td class="thick">Bachelor of Computer Science</td>
        </tr>
      </table>
      <table>
        <tr>
          <td class="left">MicroTrain Technologies — Chicago, IL</td>
          <td class="right">2021</td>
        </tr>
        <tr>
          <td class="thick">Agile Full Stack and Hybrid Mobile Application Development</td>
        </tr>
      </table>
    </section>
  </main>
EOT;

require '../core/layout.php';