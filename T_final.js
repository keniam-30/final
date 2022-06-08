const menu = {
    "Pages": [
        {"PageTitle": "Biografía", "ref": "Biografia.html" , "ParentMenu": null },
        {"PageTitle": "Menú con CSS", "ref": "me.html" , "ParentMenu": null },
        {"PageTitle": "Validador de cédula", "ref": "cedula.html" , "ParentMenu": null },
        {"PageTitle": "Menú Dinámico", "ref": "index.html" , "ParentMenu": null },
        {"PageTitle": "Formulario con paginas múltiples", "ref": "index1.php" ,"ParentMenu": null },
        {"PageTitle": "Formulario de contactos", "ref": "index2.html" ,"ParentMenu": null },
        {"PageTitle": "Formulario que integra gráficos", "ref": "condiciones1.html" , "ParentMenu": null },
        {"PageTitle": "Resumen de XML", "ref": "resumen.html" , "ParentMenu": null },
        {"PageTitle": "Resumen JSON", "ref": "resumenJSON.html" , "ParentMenu": null },
        {"PageTitle": "Resumen AJAX", "ref": "resumenAJAX.html" ,"ParentMenu": null },
        {"PageTitle": "Resumen de Conexion de Bse de Datos", "ref": "conexion.html" , "ParentMenu": null },
        {"PageTitle": "Resumen del Modelo MVC", "ref": "resumenMVC.html" , "ParentMenu": null },
        {"PageTitle": "Validad la cédula de identidad", "ref": "https://validarcedula.herokuapp.com/" , "ParentMenu": null },
        {"PageTitle": "Resumen Spring Framework", "ref": "Spring.html" ,"ParentMenu": null },
        
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