<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu>.dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
  -webkit-border-radius: 0 6px 6px 6px;
  -moz-border-radius: 0 6px 6px;
  border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
  display: block;
}

.dropdown-submenu>a:after {
  display: block;
  content: " ";
  float: right;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  border-left-color: #ccc;
  margin-top: 5px;
  margin-right: -10px;
}.dropdown-submenu:hover>a:after {
  border-left-color: #fff;
}

.dropdown-submenu.pull-left {
  float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
  left: -100%;
  margin-left: 10px;
  -webkit-border-radius: 6px 0 6px 6px;
  -moz-border-radius: 6px 0 6px 6px;
  border-radius: 6px 0 6px 6px;
}
.dropdown-submenu:hover>a:after {
  border-left-color: #fff;
}

.dropdown-submenu.pull-left {
  float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
  left: -100%;
  margin-left: 10px;
  -webkit-border-radius: 6px 0 6px 6px;
  -moz-border-radius: 6px 0 6px 6px;
  border-radius: 6px 0 6px 6px;
}
</style>


<li class="">
  <div class="dropdown" ng-controller="dropDownController">
    <div role="button" data-toggle="dropdown" class="btn btn-primary">
      Dropdown <span class="caret"></span>
    </div>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
      <li><a href="#">Some action</a></li>
      <li class="dropdown-submenu">
        <a tabindex="-1" href="#">Hover me for more options</a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Second level</a></li>
          <li class="dropdown-submenu">
            <a href="#">Even More..</a>
            <ul class="dropdown-menu">
              <li><a href="#">3rd level</a></li>
              <li class="dropdown-submenu">
            <a href="#">Even More..</a>
            <ul class="dropdown-menu">
              <li><a href="#">3rd level</a></li>
            </ul>
          </li>  
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</li>

<script type="text/javascript">
cats = [{
  "parentCategory": "All Categories",
  "childCategory": "Personal",
  "postID": "01",
  "description": "Different posts that I have made mostly consisting of Rants and Raves"
}, {
  "parentCategory": "All Categories",
  "childCategory": "Truth Seekers",
  "postID": "02",
  "description": "If you have realized that the world you live in is strange. Then this is a good place to start learning about the truth. "
},{
  "parentCategory": "All Categories",
  "childCategory": "New Submenu",
  "postID": "03",
  "description": "If you have realized that the world you live in is strange. Then this is a good place to start learning about the truth. "
},{
  "parentCategory": "New Submenu",
  "childCategory": "SUB Submenu",
  "postID": "031",
  "description": "If you have realized that the world you live  in is strange. Then this is a good place to start learning about the truth. "
},
{
  "parentCategory": "New Submenu",
  "childCategory": "SUB Submenu1",
  "postID": "032",
  "description": "If you have realized that the world you live  in is strange. Then this is a good place to start learning about the truth. "
}, {
  "parentCategory": "SUB Submenu",
  "childCategory": "SUB SUB Submenu",
  "postID": "0311",
  "description": "If you have  that the world you live  in is strange. Then this is a good place to start learning about the truth. "
},{
  "parentCategory": "Truth Seekers",
  "childCategory": "Satellites Orbiting the Earth",
  "postID": "021",
  "description": "Information about the existence of satellites orbiting the Earth"
}, {
  "parentCategory": "Truth Seekers",
  "childCategory": "Size of the Earth",
  "postID": "022",
  "description": "Information about the true size of the earth"
}, {
  "parentCategory": "Truth Seekers",
  "childCategory": "Mandela Effect",
  "postID": "023",
  "description": "Information about the Mandela Effect"
},{
  "parentCategory": "Mandela Effect",
  "childCategory": "Lists of Changes",
  "postID": "0231",
  "description": "Lists of changes from the Mandela Effect"
},
{
  "parentCategory": "Truth Seekers",
  "childCategory": "Mandela Effect",
  "postID": "023",
  "description": "Information about the Mandela Effect"
},
 {
  "parentCategory": "Personal",
  "childCategory": "Rants",
  "postID": "011",
  "description": "Some posts where I blow off some steam about stuff that really irritates me"
}, {
  "parentCategory": "Personal",
  "childCategory": "Raves",
  "postID": "012",
  "description": "Some posts where I show gratitude for things that are good"
}, {
  "parentCategory": "Personal",
  "childCategory": "Misc",
  "postID": "013",
  "description": "Random posts about random stuff"
}];



var $dropdown = $('ul.dropdown-menu.multi-level');

var children = getChildren('All Categories', cats);

for (var i = 0; i < children.length; i++) {
  var $parentLink = $('<a href="#/categories/' + encodeURIComponent(cats[children[i]]['parentCategory']) + '" >' + cats[children[i]]['parentCategory'] + '</a>');
  var $childLink = $('<a href="#/categories/' + encodeURIComponent(cats[children[i]]['childCategory']) + '" >' + cats[children[i]]['childCategory'] + '</a>');

  if (hasChildren($childLink.text(), cats)) {
    var $liLabel = $('<li class="dropdown-submenu" />');
    $parentLink.attr('tabindex', '-1');
    $liLabel.append($childLink);

    var $ul = $('<ul class="dropdown-menu"></ul>');
    var childrensChildren = getChildren($childLink.text(), cats);
    for (var x = 0; x < childrensChildren.length; x++) {

      var $ParentsparentLink = $('<a href="#/categories/' + encodeURIComponent(cats[childrensChildren[x]]['parentategory']) + '" >' + cats[childrensChildren[x]]['parentCategory'] + '</a>');
      var $ChildschildLink = $('<a href="#/categories/' + encodeURIComponent(cats[childrensChildren[x]]['childCategory']) + '" >' + cats[childrensChildren[x]]['childCategory'] + '</a>');

      var $li = $('<li />');
      $li.append($ChildschildLink);
      $ul.append($li);
    }

    $liLabel.append($ul);
    $dropdown.append($liLabel);
  } // End if hasChildren
  else {
    var $li = $('<li />');
    $li.append($childLink);
    $dropdown.append($li);
  }
} // End for loop



function getChildren(category, categories) {
  var results = $.map(categories, function(element, index) {
    if (element.parentCategory === category) {
      return index;
    }
  });
  return results;
}

function hasChildren(category, categories) {
  var results = $.map(categories, function(element, index) {
    if (element.parentCategory === category) {
      return index;
    }
  });

  if (results != undefined && results != null) {
    return true;
  }
  return false;
}
</script>