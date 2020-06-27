import React from 'react'
import { Switch, Route, Redirect } from 'react-router-dom'
// 以下作成したコンポーネント
import Signin from './Signin'
import Top from './Top'
import Item from './Item'

const App = () => {
  return (
    <>
      <Switch>
        {/* 吉島さん、searchページのルーティングをしてみましょう */}
        <Route exact path='/signin' component={Signin} />
        <Route path='/' component={Top} exact />
        <Route path='/items/:id' component={Item} exact />
        {/* /item/:id のidは13桁の数字、など決まっていれば正規表現で以下のように書ける */}
        {/* <Route path='/items/:id([0-9]{13})' component={Item} exact /> */}
        <Redirect to='/' />
      </Switch>
    </>
  )
}

export default App
