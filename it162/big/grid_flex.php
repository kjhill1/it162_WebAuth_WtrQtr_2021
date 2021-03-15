<?php include 'includes/big_header.php'?>

<!-- START LEFT COLUMN -->
<div class="main"> 
<h2 class="pageID">Designing with Flexbox and Grid Webpages Layout</h2> 

<p>Currently, Cascading Style Sheets (CSS) use two layout models to create web page layouts: Flexbox and Grid. Both are properties that create the containers in which the content “lives” in a page structure. While both are methods are effective, they differ in how their CSS properties and values respond to the elements when display is set to “flex” or “grid.” They can be used separately or together to offer the flexibility required to meet the browser’s needs, in turn meeting the users’ needs. However, their behavior needs to be understood before making the decision on what is best for the layout design.</p>

<h3><b>Brief Summary of Flexible Box</b></h3>

    <p>Flexbox is a one-dimensional layout style that uses columns or rows to place elements on a main (horizontal) and cross (vertical) axes. Once an HTML element is assigned the property and value of “display: flex;” it becomes a container and the parent elements. Inside the parent container, the properties and values such as (but not limited to)” flex-direction: row/column/wrap;” indicate which direction the flex items are stacked, in either columns or rows. The columns are assigned a “height” which sets the parameter within which the child element must work.</p>

<p>To become responsive to a device regardless of the screen size, Flexbox uses “@mediaquieries” to adjust, shuffle, add or subtract content on the page to respond to the screen size as indicated by the web browser.</p>
    
<p>When is the best use of Flexbox Box Model the sole method for structuring layout?  The consensus seems to be as follows:</p>

        <ul> 
          <li>With simple, content first layout</li>
          <li>Creating a Block style layout by using column and rows</li>
          <li>To have greater control of spacing, alignment, scale, and order of elements</li>
        </ul>

    <p>Of course, these are just the basics. Like HTML and coding, there are many layers beyond this, such as the relationship between the parent and the descendant elements and responsive designing. Please see the references for further reading.</p>

    <h3><b>Brief Summary of Grid Layout</b></h3>

      <p>Grid is a two-dimensional, layout system used to place content on a webpage in a visual appealing and logical manner. It uses spacing with margins, gaps (gutters,) rows, and columns, to collectively provide an infrastructure for content of the webpage.</p>
      <p>Flexbox and Grid are very similar but also have key differences. They both use the properties “align-“ and “justify-;“ values to position items on an axis. However, Grid uses both columns and rows individually, as opposed to manipulating the column to create the row. By assigning a property and value of “display: grid;” in CSS a container is created with the parent element. Within the container, the cells are built by one or more child elements a.k.a. “grid- items.” The “grid-row/column-gaps,” are the properties that actually create the block for the elements within the “grid-area” of the gutters, columns, and row. Currently, the standard is 12 columns for a desktop, 8 columns for a tablet and 4 for a mobile. </p>

      <p>Like Flexbox, Grid uses “@mediaqueries,” to adjust the content contingent browser’s indications, by changing, subtracting, or reshuffling the  layout, Considering the structure that Grid affords, it is considered the best use for the following:<br>

        <ul>
            <li>To create complex design because it is not limited to content structure, including over lapping of elements</li>
            <li>Can easily divide up the major regions of a page into smaller sections or define the relationship between elements in terms of size and position</li>
            <li>The auto-placement property will use all available space without calculations</li>
        </ul>

    <h3><b>Using Grid and/or Flexbox Together</b></h3>

        <p>Using both Flexbox and Grid in CSS, can be highly effective given Grid’s ability to create a strong structure and Flexbox’s strength of adjusting individual elements. However, as noted, they have their individual assets for specific types of projects.As always, within any Web Design project, use what method provides the optimal user experience.</p>

<div class="reference">
        <h3><b>References</b></h3>

<p><cite><a href="https://tympanus.net/codrops/css_reference/flexbox/">“Flexbox, or the Flexible Box Layout, is a new layout mode in CSS3 designed for laying out complex applications and web pages.”  Uncredited</a></cite></p>

<p><cite><a href="https://medium.com/@BennyOgidan/history-of-css-grid-and-css-flexbox-658ae6cfe6d2">“CSS Layouts” Madhur Taneja, May 7, 2020</a></cite></p>
 
<p><cite><a href="https://www.w3schools.com/css/css3_flexbox_container.asp"></a></cite></p>

<p><cite><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Grid_Layout/Basic_Concepts_of_Grid_Layout">Basic Concepts of grid layout</a></cite></p>

<p><cite><a href="https://brolik.com/blog/when-to-use-flexbox/">“When to use Flexbox” Alex Caldwel, Dec 22, 2015</a></cite></p>

<p><cite><a href="https://blog.logrocket.com/flexbox-vs-css-grid/">“Flexbox vs Grid”, Leonardo Maldonado, April 6, 2020</a></cite></p>

<p><cite><a href="https://blog.hubspot.com/website/css-grid">“How to Create a Perfect CSS Grid on Your Website [Sample Layouts],” Clint Fontanella</a></cite></p>

<p><cite><a href="https://elementor.com/blog/grid-design/"></a></cite></p>

<p><cite><a href="https://rachelandrew.co.uk/css/cheatsheets/box-alignment">“Box Alignment Cheatsheet.” Uncredited</a></cite></p>
</div>

</div>
<!-- END LEFT -->
  
<!-- START RIGHT -->

      <aside>
      <img src="imgs/doorsflex.JPG" alt="decsions"> 

    </aside>

<?php include 'includes/big_footer.php'?>