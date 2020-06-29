import React from 'react'
import { Helmet } from 'react-helmet'
import { useLocation } from 'react-router-dom'

const Search = () => {
  const location = useLocation()

  return (
    <>
      <Helmet>
        <title>Search</title>
      </Helmet>
      <div>
      検索結果が表示されるページです。
      </div>
      <div>
        クエリはこちら: {location.search}
      </div>
      <div>
        これをAPIに渡して検索結果をゲットします。
      </div>
    </>
  )
}

export default Search
