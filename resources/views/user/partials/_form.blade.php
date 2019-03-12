@csrf
<p>
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" value="{{$user->name}}">
</p>
<p>
    <label for="email">E-mail:</label>
    <input type="text" id="email" name="email" value="">
</p>
<p>
    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" value="">
</p>


<p>
    <button type="button" id="undo">Desfazer</button>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
</p>


<p>
    <input type="submit" value="Salvar">
</p>


<script>

    /**
     *   Padrão de Projetos Memento, usado para restaurar texto ao precionar botão
     *  desfazer
     */
    class ContentMemento {
        constructor(stateContent) {
            this.stateContent = stateContent
        }

        setContentMemento(stateContent) {
            this.stateContent = stateContent
        }

        getContentMemento() {
            return this.stateContent
        }
    }


    class ContentCareTaker {

        constructor() {
            this.states = []
        }

        addContentMemento(contentMemento) {
            this.states.push(contentMemento)
            console.log(this.states)
        }

        getLastContentMemento() {
            console.log(this.states)


            if (this.states.length == 0)
                return new ContentMemento("")
            else
                return this.states.pop()
        }

    }


    class Content {

        constructor(stateContent) {

            this.element = document.querySelector("#description")
            this.caretaker = new ContentCareTaker();

            this.element.addEventListener('blur', () => {
                this.write(this.element.value)
            });

            document
                .querySelector("#undo")
                .addEventListener('click', () => {
                    this.undo();
                });
        }

        write(content) {
            this.caretaker.addContentMemento(
                new ContentMemento( this.element.value ))
        }

        undo() {
            this.element.value = this.caretaker.getLastContentMemento()
                .getContentMemento()
        }

    }


    var c = new Content();


</script>
