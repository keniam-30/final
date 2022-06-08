const menu = {
    "Pages": [
        {"PageTitle": "Datos Personales", "ref": "formulario.php" , "ParentMenu": null },
        {"PageTitle": "Familiares", "ref": "familiar.php" , "ParentMenu": null },
        {"PageTitle": "Condiciones Pre-Existentes de Salud", "ref": "condiciones.php" , "ParentMenu": null },
        {"PageTitle": "Internamientos Realizados", "ref": "internamiento.php" ,"ParentMenu": null },
        
      ]
    }
    
    // abstracted way to create an element
    const createElement = (type, className, text, ref) => {
      const el = document.createElement(type)
      el.className = className
      el.href = ref
      if (text) {
        el.appendChild(document.createTextNode(text))
      }
      return el
    }
    
    // print the menu as a tree
    const createMenu = (menu, parentName = null, level = 0) =>
      menu.reduce((ul, item) => {
        if (item.ParentMenu === parentName) {
          const li = createElement(`li`, ` `, )
          const a = createElement(`a`, ` `, item.PageTitle, item.ref)
          li.appendChild(a)
          ul.appendChild(li)
          // recursively call itself changing the parentName to the current PageTitle
          const children = createMenu(menu, item.PageTitle, level+1)
          if (children.childNodes.length) {
            li.appendChild(children)
          }
        }
        return ul
      }, createElement(`ul`, `nav`))
    
    const app = document.querySelector(`#app`)
    app.appendChild(
      createMenu(menu.Pages, null)
    )
    console.log(app.innerHTML)   