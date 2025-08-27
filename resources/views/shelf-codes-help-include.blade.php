<img style="float: right; margin-left: 3rem;" src="/img/shelf-code-example.svg">
<div id="content"><h3 id="model">Model</h3>
<p>The upstairs shelves are arranged in parallel <strong>banks</strong> running north-south with aisles in between. A shelf location has four parts:</p>
<ol>
<li>Shelf bank. This is a letter that corresponds to the labels for the structural columns in the building. The shelf banks are aligned to trusses spanning the columns. The letters run from C at the far west end to J or so at the east end, but some trusses may not have shelf banks.</li>
<li>Shelf side. This is a number identifying a shelf within a bank. Generally there's a west side shelf 1 and an east side shelf 2.</li>
<li>Stack. The shelf platforms are mounted on vertical supports that divide the north-south shelf run into <strong>stacks</strong>, which are assigned consecutive integers with lower numbers on the north side. The first stack number can vary from shelf to shelf.</li>
<li>Level. A stack usually consists of multiple shelf platforms, so this indicates how many shelves up the item is. 0 is for floor-level items. Note that different stacks may have different numbers of levels or platforms set at different heights.</li>
</ol>
<p>The parts are combined using this syntax: {bank}{side}:{stack},{level}.</p>
<h3 id="signage">Signage</h3>
<p>Shelf codes and stack numbers are posted on white paper signs about the size of a credit card. Shelf code labels are near the north end of the shelves, and stack numbers are posted on the shelf supports at roughly eye level with an arrow indicating which side the label applies to.</p>
<h3 id="example">Example</h3>
<p>Let's locate something at E2:4,1. This is read as &quot;shelf E2, stack 4, level 1&quot;. Follow the letters along the north side of the shelves to the unit labeled E2. Go south down the adjacent aisle to find the sign with a 4 and look at the stack it points to. Next, find the first shelf platform from the ground, and that's where the item is.</p>
<h3 id="special-cases">Special cases</h3>
<p>There's only one shelf (C1) in the C bank and it follows the nonlinear western wall. Stack numbering for C1 starts in the northwest corner of the building.</p>
</div>
