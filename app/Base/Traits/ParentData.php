<?php
namespace App\Base\Traits;


/**
 * 
 */
trait ParentData
{
    

    public function parent($name)
    {
        $request = $this->request;
        return $request->route($name) ?? null;
    }

    public function setUpLinks($methods = ['index'])
    {
        $currentMethod = $this->crud->getActionMethod();
        $exits = method_exists($this, 'tabLinks');
        if ($exits && in_array($currentMethod, $methods)) {
            $this->data['tab_links'] = $this->tabLinks();
        }
    }


    public function setHumanResourceTabs()
    {
        $parameters = array_values(request()->route()->parameters);
        $links = [];
        $links[] = ['label' => trans('Human Resource'), 'href' => backpack_url('human-resource/'.$parameters[0].'/edit')];
        $links[] = ['label' => trans('Hr Social Media'), 'href' => backpack_url('human-resource/'.$parameters[0].'/hr-social-media')];
        return $links;

    }
}
