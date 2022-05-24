@extends('layouts.plantillabase');

@section('contenido');

        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}">
                {{ __('Menu Pincipal') }}
            </x-jet-responsive-nav-link>
        </h1>
        <h1>Banco de Preguntas</h1>

        <div class="container  row d-flex justify-content-center">
            <div class ="row">
            <div class="card" style="width: 18rem;">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAT4AAACfCAMAAABX0UX9AAAB3VBMVEXlXVH////zf3Lm5+nS09UAABz//v/zf3EAAAD0fnLmXFEsJTSDhIvm5+oAACLjXVEAABkAABDu7/BeYGj9g3QAAB7/5HNtQEj09fYAACiXmJ27vL7Q19vsjoPYcmrQ0dPjUUP+hSJwxqTZv7/58e/3gCn2d2rqdoPK39ruI0GTUFGb0sCLjpMACykAACQAABVLvYTnvMJ6yKvn1NiV2LWqq67tr6hbxfIXsmvzvrXpaVzE3uxcxPTl8PDrr7btjpeK0O46PEnxjHG6qmH+xUziNUsNFCrpWm7y//x8zKVFITB3RCzWy83vhnz82nTjST6kSEhYMDuOQD7YWld/OUNpLTp2dYCBOjtTMDVOJDlxMDejfUT6r0/4uU29iErnfE7pdE3xjGb1mlS42vDjT0/nmUzrh0v3n2bouUfiJ0Hlq0bkZk/noEoeGzO318ylUlTvDCrCZ2FAMDuBSUq3TkZbACPtVGdjQUogITAqOlWnY11oxZVxTFA+MUJNUFqXWFRDHCcsFy21kJAptnkArmHU2szk5auSuNft55X/9F7wABFvqc8jis/XrrW8xNKXVyjqonDwdTTgspfzo5//++La2Ln/32H467321oz0z6b6zm/0s2z81XXat3H50s4s0jyHAAAPIElEQVR4nO2diX/TRhbHZflQZkAWMYptWEd2iSuyCXbIgSFO3XKt67A4AUJ6LWxLQ1u2FKgxW9rQXdpyNHvQzW7KUWj9t+57o5EsKXZsCjStrF9sXQl87O/nvXlv3sxIguDLly9fvnz58uXLly9fvnz58uXLly9fvnz58uXLly9fvnw9myilxp5vqXFR4Jd9bSBkpJg7AEkVxQAJe2WzP9xvQcgMSSlFLuCmUEp94+tKCnDTCRFFUUKJ8EN0HSgqgg+wtTgX8FQgB9yAHWEEcW+cI8QiI0h9jG4x9wR2DFR7AUFbc+jLEMIDdtzWOogR3OxP/OuSAa8LdsynpWLPx2Bq5iEUPbGIQYLgm7BwYUhqI/ibIuX/mgVpR4bYE7p43rQgSovEZXhNgu2tUOEerAisLTQSQ6qc7w3DhMaOcunqz5IuUJ4NMo7Gf6fQHsEn0BNbnodOKtx1TxwrbznVO/67EC2Hw9vgBQq7hdfWX3X/RTg8kMudZgZHT+QXT53One6Rnh2lC7noG1ufVXsODSwaDrx4EvZvbukR60N8fXLgmfUG4BOw5Vt8q9fw9Qd/NrVgkL+2RxdZdYYuvg34Tm/plYwarY/hixhAIpGIA1CEXTGu4oFxgZ3DOxbjr+0DCea79J0/nTl75s9v9Qg9QdGifa2tL9LyahttDyd0LAy+e9TQh+cFr+cuFJM0XYv2p+WgIdjLINwGzWtdKQbWp+oKfY/TO3v0Xep1fNhD0EU7PlOybOHsRrKBT9Lp2aOmzipeNz9IdHWR4bNM7yDTTHB4FBWU5Q4AZf6OgfOqIjmH4M689z5sL3zo9eih0KJIbNYH2/1MS8HhXbsmdk10xmdSZNZHyEeI7yI9j7sPPG58AtBz4APNMMHpMKqj4bnxfcCiBmsBL3ziceOjioT1FYf1WTFEbhKS2zCzy259R89jC3jhfY/jE3D0wml9sswDLx6W5FKpK9dtWt9hho8FkAvveTt0UJ3V6+zWV5L/gPrLq5C2GK3gzFPhE8kZI2sBeh9TxcPmR2lRcuMDDM+GD8yZZy4XPr7oYXjY8PHxR1fex5wXfbeE6jZ1tqyPSCx6nP3kIhqfd52X5Sxu57VoGb2PIPthVzskMKb1gUGTw+c+evfiecG7nQ6wC4y6rZzXTFxkI3OxqSvrM/5HolBPDwBDf0qXRBs+bnKyvP8VEKTNwdIul7rHR0Tdu6YnYLtHFWukzLI+NLkS77TB+ahLT4OPeDnoCixpIW58vM3jB7KZBMpmLuj+k3b4cHBT3+wv+EJlhl0bPt73l0uxWCwI7xIclOQYDx5OkA6Csg0fzjyA+HFpy0k2jdKrNoid3XXOy9x3t0uTQV58aeryBtYnqZqmjQyUL11R3hG8Sk9QpDb4gr936tNxWb7siiGtWkEr79PKl8by0Wg+Wt5xTPFqxappfO60edwlIOPOYFqlMFavo5zL5a5oVS0RLeeubfbXfEGihKxr+1pEBlu9oGMF38Anicu5z6vSSGJEreXLXrU+hbS2Pl6l4rWqNqQ2jLzqyXxNy+dyA5fIm/lTHk3+bL7riLyAYf8r+7ngxGztJnZNTOCuffmK49Ou5raoV8ugXL2449JbnsRnVKrc1md0bffvb+ILTrjkqCDY6qlNfPlyQs0zfFf1XDnnQXyQj4m8v8vx5cfSbTzVHLc0Xs1yDKSH/Pc8n+b4atvKJ9Ucwwf7XNiD+CCbFYmEKS6TqmoD/elYG3E6rOosGzUsLGPFSjHjKOhMm6XapW3VOppfvlYbWLzmvdBBcQZubcSmei66dU8b3XvV1Dhget3QZ8HdnxkH42ZraIWOkXxdTeSjO66of4te82DoAHxEG8iNmeofGwtv62ut/vBfrQR6NzR8Zi49+dmnZlLtxCeRRC5aV0WNHD6Zyy14sGgF+CQtGt2zswttz199zdSr4KWTXM0DV+SVNMia85cSI9ej0XL+hPfw4RwywNfX1bSfff2HkmZz5wi67MR+zSoZaLl6HRGWb+ZverJkQIsQa/uSXeEbOxRzUHOXXtZZH/AjqrZt4HPYqkUv9joQX7RLfP1fHLQESUrLCqqjYFVdHljWyPJyTVVVsah4L3Q08V3ei5oNzLL95UBgdK9dU4Cv74tmGg2YJly1F1vxwJhhlcgfGzkWvqmqUu3kTU33XtvH+hwc3+0DBw7cvhG4gfsDN6am9rIDrtuzrO2bsRQsrRs9sg3MMXzq2/Xl68uJOnQ/vq7XE7oXByotfMMAbGpqNDDK9iV2YYodM40aocORQrtz6mYzmNweTajL4dq23EAtt6zWv4xe/ZvmybZPlxg+nHoLDmrtTc06Iu93v+tSf88n1PrAcr4crYVHVO3q9S+vS55MmyWJh45IYKpiTAWfDTTnfs8GrFnN+8bK/d0qVwbnPXmzvq1+8zqE4JtfJWrEg9YH+ERtAK2vUgnMVioV2FdmA3DCxK+Z1lceGHAuITJ+zOVHfC0S01hCIl/3J5YTYZbBVEVV8mDe17S+yyxEQOhg+8vM9EZZ9Jiw8r4tO+094I37KN9Ap6NW76vXqoQt9yXEe/Sc+G4dOLB34hbG2duXGTDAB6ezFr5DwVC3Sg3pkkrEmog1eyLiemAPtn2CYCUugO8WWN/wZVQJl7kERg8Y+CImvpTBJt0FvyGdjwFIRMT11KLkwbbPgY85r12jSBTxRRz4tvZ93hkg4JMcZWwvhg5b2gyobh2w5SlofUgP2j6X9fWVw1ufFp+IE4U2+8s+f1n4IMrCq8JWrVkEK5HR4YAVeU18h8b69vn4mJolA2Nhn3vl2uhwxMz8LHzpPZ3pAT4HPCIWPdnn3aDigk0eWJ+ZN0OvI9UZG9cwRF7SC/ik9gWryuzUjdmpKe7PT4MvlSpAvuLwXk/iE4SN8BlFF9N5+w8dTzs01F73CJ+vyiWJXsz6cJh3A3y3WK3PavuOFZyFAaKD2Ga9INVT4Q0dNmMretH22Ehbx2ozz/v63fiYWUlksLOAnyfxKbgAuh0+Y419wHLeYwWn8zKnJIVUO925Ozz0Wuq7b1PDBanoUXzFdvgidogcnzN2iBgd9LY9kNTKP+6+/s9X//Xvb+8cJ15s+tiiju5H2r5y4cOFL0RyxROb7t+9c293+rtv0+njujfxCZRq+XKzTsdqdQNjY7gLwy5s1fDC0dyxgoNeWtKhK6tnk52V9ebN6fD2DwvRHS7luHbsyDuuHzoODZqN3/TQEAF8G4cdts16M+kTXlqvl/9o6j8tfvvRjD05Dumd8Bn8shkv4qP0pZdbINpIq47mL61LnfAZ1pfZ7K/6QqT89+Wn00v/O+5QG3zuyoNH8QkKrrQ1Ovc4HsHqwhsK/wiY6ex2nFhEboVveCbSG/jwNnG4pI0vTsBRCaITozdmk2TudeP3eNNr2EsqaYlvaaZHrI+yu1rbrG+wdR4Sc5xV1nQyWLj3zTevOfGBzZVgW1oq4Z539vCqV/EJRset6ZuDyWAwlIK39QqtPwkWiAh93p379lWdkbc0swTbmaVK5eBMsgesj4k2V7WRwVgSb8AXCwUi6UAgZJ4E0pFAKIYnSbgcLOhVwLdv575BO77kzBJzW9hE8LAS6AHrE9hMF17bBHzBWCgYC4ZisXQMj0Kp5kkSjvBEZvhCYH6DNucFYsxlkwdLnGWpF/DhcnIbvmZSF0qlzSN7rpcKgfMCvvS+nTsHVWLDN8NglZaSuKvMHJzpBXwovjJLcjjv3Pc25w24nDeERYGU3XmT3GGh/UN4S2b87QF8VJJMfMEk89JkLP3gIRyl+EmMXU4lg+lkkuFj3TZH24eRY8lo+irNps/zoUNgQ0YmPtNf4/fj95vOi0dgbsa2HT4EGChh05c04EV6xPpY8kK488pyIDv3/YP7cea8shV5AR06b6iJL+TGx5rAwDp5HB9W4wi3vlggdWfl+wcPwfoeQnMnByOAL5lORhAXNIQcX6ql9UV4l6NHOm1ciE9hXbHBGHjo/QfsJ/4w5ageW/4bLEhiCEczQtX11leprL/LrsfxMRVN65Pvg+09hPfKihFS0Xnvrjgirz44NDQ+tNai4hJx7Xuh7UOxu28CvkjqftzQSnwFIcTSAG1lDj05hScBuYCVAywrSG7ra3175x7Ax+6cy/q8Msf34P5K3Fpt8Gju4Ry/qYGcLDTLWr1cLrULJ8/qkjgN+oFb3w+P4tNc44/mHs39MMfPqiY+SdQbXeCbzGz2t3vhoniXdKzi6fo5ju9xPK4TVvjT9Sc/Ppl7Ej/3I5uX0SwxSFJ1uo0KltY8Oc7mFq4Z1bGGbOKLx+ewoMye9fQY8K3GV+NsrnJz6o8kkmZhlU94MXhnmuqVxz3hXeuJSFYtfHFiVPIPx3+cewzW9yQudXzuGIPr7bumtZWi6BI5bNF7wvDBhbnH/EpnfEhQ9+pNgzqJ4n1MTVaP0XcZvtUnJr7OTxsTcUJQj9JT8GaSpvnhHEfixHe4s/URT06n6l6K/tORI0d+OrJq3lQScM6Z+Da0Phy71D24eq17sQeELe6IRvN5TWziM7Vx28cct5fpMdFFnCIU1cjT4EMvZ6bnxbsWPJXotVMnTly5UrXImLGEJYKtnNZs9Yzsu+f5oYpIirBQS8ymb7VV0yex7Abh+bKEDzcmxmNSiWS6b0vjY4/aloq9muu1FVqgxBa46KtHUKsSWWd+jJ3uR4xWMp+vrdZwpmn0ynp6Ij5Z2ze89lKAIODDu1Etq6L1uGhue3pR8NltKAimwsKJK7Xasma3PqKD2Xn7ITrPS1QwnvksFLkURbE/BtrXBsJpMEiJWqUAhdkku7aZH8yXL1++fPny5cvXC5Gf422otv0vKhj9C1zByh6Mh0fGNb/PZqk9PqVaVDJFDTofCwtCBofjMtgTySxoPT0w5FQ7fFTMjjfodGM8C0eN7Np8gzYKmWpjfrrRmM78kp/wV612+DJZLZPRJufn1xpaY17IZhpKY7JKGmRyPpP5JT/gb1OZbIbSNbCzIuDLzMNGaSxktcZaIUMHfeftpExWyWQGG/PwRnxZZVJpFKvZBrhvRvbkQvvnqsza5GABmru1rKZl1xrT84gvM92Yz04P9sDM0WeVktEKa0pmbW2BKmtrWoZWaVURlCp49FrVN76OYnVlNh5EKTSDillnphnfdX358uXLly9fvnxtkv4PO482+6Rqsy0AAAAASUVORK5CYII=" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Programacion</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/tema" class="btn btn-primary">ir al Examen</a>
            </div>
            </div><br>

            <div class="card" style="width: 18rem;">
            <img src="https://i2.wp.com/universidadmundial.edu.mx/wp-content/uploads/2020/02/artes-visuales-portada.jpg?fit=740%2C581&ssl=1" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Artes</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a  href="/matematicas" class="btn btn-primary">ir al Examen</a>
            </div>
            </div><br>

            <div class="card" style="width: 18rem;">
            <img src="https://i.pinimg.com/originals/61/68/ef/6168ef808c10bd9991bf2bf415479ac4.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Fisica</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/ciencias" class="btn btn-primary">ir al Examen</a>
            </div>
            </div><br>
        </div>
    </div>


@endsection
