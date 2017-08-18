<?php
/**
 * Template Name: page home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container parallax-container home-hero">
  <div class="row home-searchbox z-depth-2">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s2"><a class="" href="#test1">FindIt!</a></li>
        <li class="tab col s2"><a class="" href="#test2">Catalog</a></li>
        <li class="tab col s2"><a class="" href="#test3">Databases</a></li>
        <li class="tab col s2"><a class="" href="#test4">E-Journals</a></li>
        <li class="tab col s2"><a class="" href="#test5">Reserves</a></li>
        <li class="tab col s2"><a class="" href="#test6">Google Scholar</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
      <div class="tab-content">
        <div class="row">
          <div class="col s10">
            <h5 class="white-text"><i class="material-icons usfsky-text">library_books</i> Articles, books, and more.</h5>
          </div>
          <div class="col s2">
            <a class="tooltipped right" data-position="left" data-delay="50" data-tooltip="Quick and brief little description of what's going on"><i class="material-icons white-text">info_outline</i></a>
          </div>
          <div class="row margin-fix">
            <div class="col s12 m3">
              <div class="input-field search-options">
                <select name="dbOption" id="dbOption">
                  <option value="" disabled selected>Choose Keyword</option>
                  <option value="1">Title</option>
                  <option value="2">Author</option>
                </select>
              </div>
              <p><input type="checkbox" id="checkbox1" /><label for="checkbox1" class="white-text">Scholarly/Peer-Reviewed Articles only</label></p>
              <!-- more options-->
              <div id="otherOptions" style="display:none">
                <label for="specify">Title</label>
                <input type="text" name="specify" placeholder="Specify Article Title"/>
              </div>
              <div id="otherChoices" style="display:none">
                <label for="specify">Specify</label>
                <input type="text" name="specify" placeholder="Specify Author Name"/>
              </div>
            </div>
            <div class="col s12 m9">
              <div class="search-wrapper card">
                <input id="search"><i class="material-icons teal-text">search</i>
                <div class="search-results"></div>
              </div>
              <p><a id="" class="white-text advanced-search-activator"><i class="material-icons usfapple-text">arrow_drop_down</i> Advanced Search</a></p>
              <div class="advanced-search" style="display:none">
                <div class="row">
                  <div class="col s12 m4">

                    <input type="text" name="specify" placeholder=" Include These Terms" class="browser-default"/>
                  </div>
                  <div class="col m2">
                    <select name="searchType1" id="searchType1">
                      <option value="" disabled selected>Search Type</option>
                      <option value="9">TX All Text</option>
                      <option value="10">AU Author</option>
                      <option value="11">TI Title</option>
                      <option value="12">SU Subject Terms</option>
                      <option value="13">SO Journal Title/Source</option>
                      <option value="14">AB Abstract</option>
                      <option value="15">IS ISSN</option>
                      <option value="16">IB ISBN</option>
                    </select>
                  </div>

                  <div class="col s12 m4">
                    <input type="text" name="specify" placeholder=" Ignore These Terms" class="browser-default"/>
                  </div>
                  <div class="col m2">
                    <select name="searchType2" id="searchType2" >
                      <option value="" disabled selected>Search Type</option>
                      <option value="9">TX All Text</option>
                      <option value="10">AU Author</option>
                      <option value="11">TI Title</option>
                      <option value="12">SU Subject Terms</option>
                      <option value="13">SO Journal Title/Source</option>
                      <option value="14">AB Abstract</option>
                      <option value="15">IS ISSN</option>
                      <option value="16">IB ISBN</option>
                    </select>
                  </div>
                  <a href="" class="btn white teal-text">SEARCH</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="test2" class="col s12">
      <div class="tab-content">
        <h5 class="white-text"><i class="material-icons usfsky-text">book</i> Search catalog for books, videos, & other library materials (but not articles). <i class="material-icons white-text">info_outline</i></h5>
        <div class="search-wrapper card">
          <input id="search"><i class="material-icons">search</i>
          <div class="search-results"></div>
        </div>
        <p class="text-align-right"><a href="http://www.lib.usf.edu/library-research/" class="usflemongrass-text"><i class="material-icons white-text">public</i> Visit WorldCat</a></p>
      </div>
    </div>
    <div id="test3" class="col s12 pink">
      <div class="tab-content">
        <h5 class="white-text"><i class="material-icons usfsky-text">find_in_page</i> Search our Databases. <i class="material-icons white-text">info_outline</i></h5>
        <div class="search-wrapper card">
          <input id="search"><i class="material-icons">search</i>
          <div class="search-results"></div>
        </div>
        <div class="linkabet">
         <span class="grey-text hide-on-med-and-down text-lighten-2">Browse By Title <i class="material-icons grey-text text-lighten-3">chevron_right</i></span> <a href="">A</a> <a href="">B</a> <a href="">C</a> <a href="">D</a> <a href="">E</a> <a href="">F</a> <a href="">G</a> <a href="">H</a> <a href="">I</a> <a href="">J</a> <a href="">K</a> <a href="">L</a> <a href="">M</a> <a href="">N</a> <a href="">O</a> <a href="">P</a> <a href="">Q</a> <a href="">R</a> <a href="">S</a> <a href="">T</a> <a href="">U</a> <a href="">V</a> <a href="">W</a> <a href="">X</a> <a href="">Y</a> <a href="">Z</a>
       </div>
       <div class="row">
        <div class="col s12 m10">
          <table class="searchbox-linkgrid">
            <tbody>
              <tr>
                <td><a href="" class="white-text">Link Grid Item</a></td>
                <td><a href="" class="white-text">Link Grid Item</a></td>
                <td><a href="" class="white-text">Link Grid Item</a></td>
              </tr>
              <tr>
                <td><a href="" class="white-text">Link Grid Item</a></td>
                <td><a href="" class="white-text">Link Grid Item</a></td>
                <td><a href="" class="white-text">Link Grid Item</a></td>
              </tr>
              <tr>
                <td><a href="" class="white-text">Link Grid Item</a></td>
                <td><a href="" class="white-text">Link Grid Item</a></td>
                <td><a href="" class="white-text">Link Grid Item</a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col s12 m2">
          <a class="white teal-text text-darken-1 btn" href="#">view all</a>
        </div>
      </div>
    </div></div>
    <div id="test4" class="col s12">
      <div class="tab-content">
        <h5 class="white-text"><i class="material-icons usfsky-text">chrome_reader_mode</i> Search our e-Journal archives.</h5>
        <div class="search-wrapper card">
          <input id="search"><i class="material-icons">search</i>
          <div class="search-results"></div>
        </div>
        <div class="linkabet">
         <span class="grey-text hide-on-med-and-down text-lighten-2">Browse By Title <i class="material-icons grey-text text-lighten-3">chevron_right</i></span> <a href="">A</a> <a href="">B</a> <a href="">C</a> <a href="">D</a> <a href="">E</a> <a href="">F</a> <a href="">G</a> <a href="">H</a> <a href="">I</a> <a href="">J</a> <a href="">K</a> <a href="">L</a> <a href="">M</a> <a href="">N</a> <a href="">O</a> <a href="">P</a> <a href="">Q</a> <a href="">R</a> <a href="">S</a> <a href="">T</a> <a href="">U</a> <a href="">V</a> <a href="">W</a> <a href="">X</a> <a href="">Y</a> <a href="">Z</a>
       </div>
       <div class="row">
        <div class="col s12 m10">
          <table class="searchbox-linkgrid">
            <tbody>
              <tr>
                <td><a href="" class="white-text">Link Grid Item</a></td>
                <td><a href="" class="white-text">Link Grid Item</a></td>
                <td><a href="" class="white-text">Link Grid Item</a></td>
              </tr>
              <tr>
                <td><a href="" class="white-text">Link Grid Item</a></td>
                <td><a href="" class="white-text">Link Grid Item</a></td>
                <td><a href="" class="white-text">Link Grid Item</a></td>
              </tr>
              <tr>
                <td><a href="" class="white-text">Link Grid Item</a></td>
                <td><a href="" class="white-text">Link Grid Item</a></td>
                <td><a href="" class="white-text">Link Grid Item</a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col s12 m2">
          <a class="white teal-text text-darken-1 btn" href="#">view all</a>
        </div>
      </div>
    </div></div>
        <div id="test5" class="col s12">
          <div class="tab-content">
            <h5 class="white-text"><i class="material-icons usfsky-text">pageview</i> Search our reserves.</h5>
            <div class="search-wrapper card">
              <input id="search"><i class="material-icons">search</i>
              <div class="search-results"></div>
            </div>
          </div>
        </div>
        <div id="test6" class="col s12">
          <div class="tab-content">
            <h5 class="white-text"><i class="material-icons usfsky-text">school</i> Find scholarly materials using Google.</h5>
            <div class="search-wrapper card">          
              <input id="search"><i class="material-icons">search</i>
              <div class="search-results"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- parallax <div class="parallax"><img src="http://www.lib.usf.edu/marcom/files/2017/07/library-side.jpg"></div>-->
    <div class="container usfslate">
      <section>
       <div class="row launch-icons">
         <div class="launch-icon blue-text"><a href="" class="white-text"><i class="material-icons">group</i>Study Rooms<span>reservations and information</span></a></div>
         <div class="launch-icon blue-text"><a href="" class="white-text"><i class="material-icons">print</i>Printing Information<span>print, copy, scan your documents</span></a></div>
         <div class="launch-icon blue-text"><a href="" class="white-text"><i class="material-icons">devices</i>IT Support<span>help with accounts and hardware</span></a></div>
         <div class="launch-icon blue-text"><a href="" class="white-text"><i class="material-icons">camera_alt</i>Digital Media Commons<span>descriptive text for this icon</span></a></div>
         <div class="launch-icon blue-text"><a href="" class="white-text"><i class="material-icons">description</i>Guides &amp; Tutorials<span>Subject &amp; Course Guides</span></a></div>
       </div>
     </section>
   </div>


<?php get_footer();
