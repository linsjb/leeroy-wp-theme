<?php
function knowledgeHubTop($pageType = null) {
  informationPageTop($pageType);
?>
  <div class="o-knowledgeHubMenu col-xs-100">
      <nav class="m-knowledgeHubMenu__nav">
        <ul>
          <li class="test" id="knowledgeHubMenuCat">Categories</li>
          <li class="test" id="knowledgeHubMenuTag">Tags</li>
          <li class="test" id="knowledgeHubMenuCas">Cases</li>
          <li class="test" id="knowledgeHubMenuLat">Latest posts</li>
        </ul>
      </nav>
  <!-- .o-knowledgeHubMenu -->
  </div>

  <div class="o-knowledgeHubMenuDropdown col-xs-100">
  <!-- .o-knowledgeHubMenuDropdown -->
  </div>
<?php
}
?>
