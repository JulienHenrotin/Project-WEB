<h1> Liste des evenement </h1>
    @foreach($event as $element )
        <li>
            {{$element -> descrip_event}}
            <form>
                <?php
                $IDelement= $element->id_event;
                ?>
                <input type="submit" name="liste" value="tableau inscrit" id="tabInscrit">
            </form>
        </li>
        @endforeach