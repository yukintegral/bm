import React from 'react'
import { Helmet } from 'react-helmet'

const MyPage = () => {
  return (
    <>
      <Helmet>
        <title>MyPage</title>
      </Helmet>
      ユーザー自身のみが見られるマイページです。
    </>
  )
}

export default MyPage
